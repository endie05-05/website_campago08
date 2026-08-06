<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    use GeneratesUniqueSlug;

    public function update(Request $request)
    {
        $validated = $request->validate([
            'umkm' => ['required', 'array', 'min:1'],
            'umkm.*.id' => ['nullable', 'integer', 'exists:umkms,id'],
            'umkm.*.judul' => ['required', 'string', 'max:200'],
            'umkm.*.kategori' => ['required', 'string', 'max:100'],
            'umkm.*.pemilik' => ['nullable', 'string', 'max:150'],
            'umkm.*.lokasi' => ['nullable', 'string', 'max:255'],
            'umkm.*.gambar' => ['nullable', 'image', 'max:2048'],
            'removed_ids' => ['nullable', 'array'],
            'removed_ids.*' => ['integer', 'exists:umkms,id'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            foreach ($validated['removed_ids'] ?? [] as $removedId) {
                $umkm = Umkm::find($removedId);
                if ($umkm) {
                    if ($umkm->featured_image_path) {
                        Storage::disk('public')->delete($umkm->featured_image_path);
                    }
                    $umkm->delete();
                }
            }

            foreach ($validated['umkm'] as $index => $item) {
                $umkm = ! empty($item['id'])
                    ? Umkm::find($item['id'])
                    : new Umkm();

                if (! $umkm) {
                    $umkm = new Umkm();
                }

                $umkm->name = $item['judul'];
                $umkm->category = $item['kategori'];
                $umkm->owner_name = $item['pemilik'] ?? null;
                $umkm->address = $item['lokasi'] ?? null;
                $umkm->status = 'published';
                $umkm->is_verified = true;

                if (! $umkm->exists || $umkm->slug === null) {
                    $umkm->slug = $this->uniqueSlug(Umkm::class, $item['judul'], $umkm->id);
                }

                $gambarInput = $request->file("umkm.$index.gambar");
                if ($gambarInput) {
                    if ($umkm->featured_image_path) {
                        Storage::disk('public')->delete($umkm->featured_image_path);
                    }
                    $umkm->featured_image_path = $gambarInput->store('umkm', 'public');
                }

                $umkm->save();
            }
        });

        return redirect('/admin?panel=umkm')->with('success', 'Data UMKM Lokal berhasil disimpan.');
    }
}
