<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResidentAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('resident')->check()) {
            return redirect('/layanan');
        }

        return view('warga.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'nik' => ['required', 'digits:16'],
            'name' => ['required', 'string', 'max:150'],
        ]);

        $resident = Resident::where('nik', $validated['nik'])
            ->whereRaw('LOWER(name) = ?', [mb_strtolower(trim($validated['name']))])
            ->first();

        if (! $resident) {
            return back()->withErrors([
                'nik' => 'NIK dan nama tidak cocok, atau akun belum terdaftar.',
            ])->onlyInput('nik', 'name');
        }

        Auth::guard('resident')->login($resident);
        $request->session()->regenerate();

        return redirect()->intended('/layanan')->with('success', 'Berhasil masuk. Selamat datang, '.$resident->name.'.');
    }

    public function showRegisterForm()
    {
        if (Auth::guard('resident')->check()) {
            return redirect('/layanan');
        }

        return view('warga.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'kk_number' => ['required', 'digits:16'],
            'nik' => ['required', 'digits:16', 'unique:residents,nik'],
            'name' => ['required', 'string', 'max:150'],
        ]);

        Resident::create([
            'kk_number' => $validated['kk_number'],
            'nik' => $validated['nik'],
            'name' => trim($validated['name']),
        ]);

        return redirect()->route('warga.login')
            ->with('success', 'Akun berhasil dibuat. Silakan masuk menggunakan NIK dan nama Anda.');
    }

    public function logout(Request $request)
    {
        Auth::guard('resident')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
