<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Models\Potential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PotentialController extends Controller
{
    use GeneratesUniqueSlug;

    public function update(Request $request)
    {
        $validated = $request->validate([
            'potensi' => ['required', 'array', 'min:1'],
            'potensi.*.id' => ['nullable', 'integer', 'exists:potentials,id'],
            'potensi.*.judul' => ['required', 'string', 'max:200'],
            'potensi.*.kategori' => ['required', 'in:pertanian,wisata,budaya,kerajinan,kuliner,lainnya'],
            'potensi.*.ukuran' => ['required', 'in:besar,kecil'],
            'potensi.*.deskripsi' => ['nullable', 'string'],
            'potensi.*.gambar' => ['nullable', 'image', 'max:2048'],
            'removed_ids' => ['nullable', 'array'],
            'removed_ids.*' => ['integer', 'exists:potentials,id'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            foreach ($validated['removed_ids'] ?? [] as $removedId) {
                $potential = Potential::find($removedId);
                if ($potential) {
                    if ($potential->featured_image_path) {
                        Storage::disk('public')->delete($potential->featured_image_path);
                    }
                    $potential->delete();
                }
            }

            foreach ($validated['potensi'] as $index => $item) {
                $potential = ! empty($item['id'])
                    ? Potential::find($item['id'])
                    : new Potential();

                if (! $potential) {
                    $potential = new Potential();
                }

                $potential->name = $item['judul'];
                $potential->category = $item['kategori'];
                $potential->card_size = $item['ukuran'];
                $potential->short_description = $item['deskripsi'] ?? null;
                $potential->sort_order = $index + 1;
                $potential->status = 'published';

                if (! $potential->exists || $potential->slug === null) {
                    $potential->slug = $this->uniqueSlug(Potential::class, $item['judul'], $potential->id);
                }

                $gambarInput = $request->file("potensi.$index.gambar");
                if ($gambarInput) {
                    if ($potential->featured_image_path) {
                        Storage::disk('public')->delete($potential->featured_image_path);
                    }
                    $potential->featured_image_path = $gambarInput->store('potentials', 'public');
                }

                $potential->save();
            }
        });

        return redirect('/admin?panel=potensi')->with('success', 'Data Potensi Nagari berhasil disimpan.');
    }
}
