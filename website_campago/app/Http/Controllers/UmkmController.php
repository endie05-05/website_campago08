<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    private function rules(): array
    {
        return [
            'judul' => ['required', 'string', 'max:200'],
            'kategori' => ['required', 'string', 'max:100'],
            'pemilik' => ['nullable', 'string', 'max:150'],
            'lokasi' => ['nullable', 'string', 'max:255'],
            'gambar' => ['nullable', 'image', 'max:8192'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'umkm', $this->rules());

        $umkm = new Umkm();
        $umkm->name = $validated['judul'];
        $umkm->category = $validated['kategori'];
        $umkm->owner_name = $validated['pemilik'] ?? null;
        $umkm->address = $validated['lokasi'] ?? null;
        $umkm->status = 'published';
        $umkm->is_verified = true;
        $umkm->slug = $this->uniqueSlug(Umkm::class, $validated['judul'], null);

        if ($request->hasFile('gambar')) {
            $umkm->featured_image_path = $request->file('gambar')->store('umkm', 'public');
        }

        $umkm->save();

        return redirect('/admin?panel=umkm')->with('success', 'Produk UMKM berhasil ditambahkan.');
    }

    public function update(Request $request, Umkm $umkm)
    {
        $validated = $this->validatePanel($request, 'umkm', $this->rules());

        $umkm->name = $validated['judul'];
        $umkm->category = $validated['kategori'];
        $umkm->owner_name = $validated['pemilik'] ?? null;
        $umkm->address = $validated['lokasi'] ?? null;

        if ($request->hasFile('gambar')) {
            if ($umkm->featured_image_path) {
                Storage::disk('public')->delete($umkm->featured_image_path);
            }
            $umkm->featured_image_path = $request->file('gambar')->store('umkm', 'public');
        }

        $umkm->save();

        return redirect('/admin?panel=umkm')->with('success', 'Produk UMKM berhasil diperbarui.');
    }

    public function destroy(Umkm $umkm)
    {
        if ($umkm->featured_image_path) {
            Storage::disk('public')->delete($umkm->featured_image_path);
        }
        $umkm->delete();

        return redirect('/admin?panel=umkm')->with('success', 'Produk UMKM berhasil dihapus.');
    }
}
