<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    use ValidatesForPanel;

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'galeri', [
            'ukuran' => ['required', 'in:besar,sedang,tinggi,lebar'],
            'gambar' => ['required', 'image', 'max:8192'],
        ]);

        $gallery = Gallery::firstOrCreate(
            ['slug' => 'galeri-utama'],
            ['title' => 'Galeri Utama', 'status' => 'published']
        );

        $image = new GalleryImage();
        $image->gallery_id = $gallery->id;
        $image->size = $validated['ukuran'];
        $image->sort_order = (GalleryImage::max('sort_order') ?? 0) + 1;
        $image->image_path = $request->file('gambar')->store('gallery', 'public');
        $image->save();

        return redirect('/admin?panel=galeri')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function update(Request $request, GalleryImage $galeri)
    {
        $validated = $this->validatePanel($request, 'galeri', [
            'ukuran' => ['required', 'in:besar,sedang,tinggi,lebar'],
            'gambar' => ['nullable', 'image', 'max:8192'],
        ]);

        $galeri->size = $validated['ukuran'];

        if ($request->hasFile('gambar')) {
            if ($galeri->image_path) {
                Storage::disk('public')->delete($galeri->image_path);
            }
            $galeri->image_path = $request->file('gambar')->store('gallery', 'public');
        }

        $galeri->save();

        return redirect('/admin?panel=galeri')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(GalleryImage $galeri)
    {
        if ($galeri->image_path) {
            Storage::disk('public')->delete($galeri->image_path);
        }
        $galeri->delete();

        return redirect('/admin?panel=galeri')->with('success', 'Foto galeri berhasil dihapus.');
    }
}
