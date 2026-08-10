<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Potential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PotentialController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    private function rules(): array
    {
        return [
            'judul' => ['required', 'string', 'max:200'],
            'kategori' => ['required', 'in:pertanian,wisata,budaya,kerajinan,kuliner,lainnya'],
            'ukuran' => ['required', 'in:besar,kecil'],
            'deskripsi' => ['nullable', 'string'],
            'gambar' => ['nullable', 'image', 'max:8192'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'potensi', $this->rules());

        $potential = new Potential();
        $potential->name = $validated['judul'];
        $potential->category = $validated['kategori'];
        $potential->card_size = $validated['ukuran'];
        $potential->short_description = $validated['deskripsi'] ?? null;
        $potential->sort_order = (Potential::max('sort_order') ?? 0) + 1;
        $potential->status = 'published';
        $potential->slug = $this->uniqueSlug(Potential::class, $validated['judul'], null);

        if ($request->hasFile('gambar')) {
            $potential->featured_image_path = $request->file('gambar')->store('potentials', 'public');
        }

        $potential->save();

        return redirect('/admin?panel=potensi')->with('success', 'Potensi Nagari berhasil ditambahkan.');
    }

    public function update(Request $request, Potential $potential)
    {
        $validated = $this->validatePanel($request, 'potensi', $this->rules());

        $potential->name = $validated['judul'];
        $potential->category = $validated['kategori'];
        $potential->card_size = $validated['ukuran'];
        $potential->short_description = $validated['deskripsi'] ?? null;

        if ($request->hasFile('gambar')) {
            if ($potential->featured_image_path) {
                Storage::disk('public')->delete($potential->featured_image_path);
            }
            $potential->featured_image_path = $request->file('gambar')->store('potentials', 'public');
        }

        $potential->save();

        return redirect('/admin?panel=potensi')->with('success', 'Potensi Nagari berhasil diperbarui.');
    }

    public function destroy(Potential $potential)
    {
        if ($potential->featured_image_path) {
            Storage::disk('public')->delete($potential->featured_image_path);
        }
        $potential->delete();

        return redirect('/admin?panel=potensi')->with('success', 'Potensi Nagari berhasil dihapus.');
    }
}
