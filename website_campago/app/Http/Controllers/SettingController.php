<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function updateKontak(Request $request)
    {
        $validated = $request->validate([
            'deskripsi' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:500'],
            'email' => ['required', 'email', 'max:150'],
            'telepon' => ['required', 'string', 'max:30'],
            'copyright' => ['required', 'string', 'max:255'],
        ]);

        Setting::set('kontak_deskripsi', $validated['deskripsi']);
        Setting::set('kontak_alamat', $validated['alamat']);
        Setting::set('kontak_email', $validated['email']);
        Setting::set('kontak_telepon', $validated['telepon']);
        Setting::set('kontak_copyright', $validated['copyright']);

        return redirect('/admin?panel=kontak')->with('success', 'Footer & Kontak berhasil disimpan.');
    }
}
