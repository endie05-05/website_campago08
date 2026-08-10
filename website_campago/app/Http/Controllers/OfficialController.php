<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfficialController extends Controller
{
    use ValidatesForPanel;

    private function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:150'],
            'jabatan' => ['required', 'string', 'max:150'],
            'foto' => ['nullable', 'image', 'max:8192'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'aparatur', $this->rules());

        $official = new Official();
        $official->name = $validated['nama'];
        $official->position = $validated['jabatan'];
        $official->is_active = true;
        $official->sort_order = (Official::max('sort_order') ?? 0) + 1;

        if ($request->hasFile('foto')) {
            $official->photo_path = $request->file('foto')->store('officials', 'public');
        }

        $official->save();

        return redirect('/admin?panel=aparatur')->with('success', 'Perangkat Aparatur berhasil ditambahkan.');
    }

    public function update(Request $request, Official $official)
    {
        $validated = $this->validatePanel($request, 'aparatur', $this->rules());

        $official->name = $validated['nama'];
        $official->position = $validated['jabatan'];

        if ($request->hasFile('foto')) {
            if ($official->photo_path) {
                Storage::disk('public')->delete($official->photo_path);
            }
            $official->photo_path = $request->file('foto')->store('officials', 'public');
        }

        $official->save();

        return redirect('/admin?panel=aparatur')->with('success', 'Perangkat Aparatur berhasil diperbarui.');
    }

    public function destroy(Official $official)
    {
        if ($official->photo_path) {
            Storage::disk('public')->delete($official->photo_path);
        }
        $official->delete();

        return redirect('/admin?panel=aparatur')->with('success', 'Perangkat Aparatur berhasil dihapus.');
    }
}
