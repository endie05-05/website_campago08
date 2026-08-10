<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ValidatesForPanel;

    public function updateKontak(Request $request)
    {
        $validated = $this->validatePanel($request, 'kontak', [
            'deskripsi' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:500'],
            'kode_wilayah' => ['nullable', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:150'],
            'telepon' => ['required', 'string', 'max:30'],
            'facebook_url' => ['nullable', 'string', 'max:255'],
            'youtube_url' => ['nullable', 'string', 'max:255'],
            'copyright' => ['required', 'string', 'max:255'],
        ]);

        Setting::set('kontak_deskripsi', $validated['deskripsi']);
        Setting::set('kontak_alamat', $validated['alamat']);
        Setting::set('kontak_kode_wilayah', $validated['kode_wilayah'] ?? '');
        Setting::set('kontak_email', $validated['email']);
        Setting::set('kontak_telepon', $validated['telepon']);
        Setting::set('kontak_facebook_url', $validated['facebook_url'] ?? '');
        Setting::set('kontak_youtube_url', $validated['youtube_url'] ?? '');
        Setting::set('kontak_copyright', $validated['copyright']);

        return redirect('/admin?panel=kontak')->with('success', 'Footer & Kontak berhasil disimpan.');
    }
}
