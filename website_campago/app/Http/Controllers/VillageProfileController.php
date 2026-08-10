<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\VillageProfile;
use Illuminate\Http\Request;

class VillageProfileController extends Controller
{
    use ValidatesForPanel;

    public function updateStats(Request $request)
    {
        $validated = $this->validatePanel($request, 'statistik', [
            'area_km2' => ['nullable', 'numeric', 'min:0'],
            'population' => ['nullable', 'integer', 'min:0'],
            'district' => ['required', 'string', 'max:150'],
        ]);

        $profile = VillageProfile::first() ?? new VillageProfile();
        $profile->area_km2 = $validated['area_km2'] ?? null;
        $profile->population = $validated['population'] ?? null;
        $profile->district = $validated['district'];
        $profile->save();

        return redirect('/admin?panel=statistik')->with('success', 'Statistik Nagari berhasil disimpan.');
    }
}
