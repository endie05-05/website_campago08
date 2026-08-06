<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'galeri' => ['required', 'array', 'min:1'],
            'galeri.*.id' => ['nullable', 'integer', 'exists:gallery_images,id'],
            'galeri.*.ukuran' => ['required', 'in:besar,sedang,tinggi,lebar'],
            'galeri.*.gambar' => ['nullable', 'image', 'max:2048'],
            'removed_ids' => ['nullable', 'array'],
            'removed_ids.*' => ['integer', 'exists:gallery_images,id'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            $gallery = Gallery::firstOrCreate(
                ['slug' => 'galeri-utama'],
                ['title' => 'Galeri Utama', 'status' => 'published']
            );

            foreach ($validated['removed_ids'] ?? [] as $removedId) {
                $image = GalleryImage::find($removedId);
                if ($image) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }
            }

            foreach ($validated['galeri'] as $index => $item) {
                $image = ! empty($item['id'])
                    ? GalleryImage::find($item['id'])
                    : new GalleryImage();

                if (! $image) {
                    $image = new GalleryImage();
                }

                $gambarInput = $request->file("galeri.$index.gambar");
                if (! $image->exists && ! $gambarInput) {
                    // Baris baru tanpa foto -- lewati, tidak ada yang bisa disimpan.
                    continue;
                }

                $image->gallery_id = $gallery->id;
                $image->size = $item['ukuran'];
                $image->sort_order = $index + 1;

                if ($gambarInput) {
                    if ($image->image_path) {
                        Storage::disk('public')->delete($image->image_path);
                    }
                    $image->image_path = $gambarInput->store('gallery', 'public');
                }

                $image->save();
            }
        });

        return redirect('/admin?panel=galeri')->with('success', 'Galeri berhasil disimpan.');
    }
}
