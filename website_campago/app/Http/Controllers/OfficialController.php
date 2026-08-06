<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OfficialController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'aparatur' => ['required', 'array', 'min:1'],
            'aparatur.*.id' => ['nullable', 'integer', 'exists:officials,id'],
            'aparatur.*.nama' => ['required', 'string', 'max:150'],
            'aparatur.*.jabatan' => ['required', 'string', 'max:150'],
            'aparatur.*.foto' => ['nullable', 'image', 'max:2048'],
            'removed_ids' => ['nullable', 'array'],
            'removed_ids.*' => ['integer', 'exists:officials,id'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            foreach ($validated['removed_ids'] ?? [] as $removedId) {
                $official = Official::find($removedId);
                if ($official) {
                    if ($official->photo_path) {
                        Storage::disk('public')->delete($official->photo_path);
                    }
                    $official->delete();
                }
            }

            foreach ($validated['aparatur'] as $index => $item) {
                $official = ! empty($item['id'])
                    ? Official::find($item['id'])
                    : new Official();

                if (! $official) {
                    $official = new Official();
                }

                $official->name = $item['nama'];
                $official->position = $item['jabatan'];
                $official->sort_order = $index + 1;
                $official->is_active = true;

                $fotoInput = $request->file("aparatur.$index.foto");
                if ($fotoInput) {
                    if ($official->photo_path) {
                        Storage::disk('public')->delete($official->photo_path);
                    }
                    $official->photo_path = $fotoInput->store('officials', 'public');
                }

                $official->save();
            }
        });

        return redirect('/admin?panel=aparatur')->with('success', 'Data Aparatur Nagari berhasil disimpan.');
    }
}
