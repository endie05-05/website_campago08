<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Korong;
use App\Models\VillageProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VillageProfileController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    public function updateStats(Request $request)
    {
        $jumlahKorong = max(0, (int) $request->input('jumlah_korong', 0));

        $validated = $this->validatePanel($request, 'statistik', [
            'jumlah_korong' => ['required', 'integer', 'min:0'],
            'nama_korong' => ['array', 'size:'.$jumlahKorong],
            'nama_korong.*' => ['required', 'string', 'max:150', 'distinct'],
            'area_km2' => ['nullable', 'numeric', 'min:0'],
            'population' => ['nullable', 'integer', 'min:0'],
            'district' => ['required', 'string', 'max:150'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'logo_admin' => ['nullable', 'image', 'max:2048'],
        ]);

        $profile = VillageProfile::first() ?? new VillageProfile();
        $profile->area_km2 = $validated['area_km2'] ?? null;
        $profile->population = $validated['population'] ?? null;
        $profile->district = $validated['district'];

        if ($request->hasFile('logo')) {
            if ($profile->logo_path) {
                Storage::disk('public')->delete($profile->logo_path);
            }
            $profile->logo_path = $request->file('logo')->store('logo', 'public');
        }

        if ($request->hasFile('logo_admin')) {
            if ($profile->logo_admin_path) {
                Storage::disk('public')->delete($profile->logo_admin_path);
            }
            $profile->logo_admin_path = $request->file('logo_admin')->store('logo', 'public');
        }

        $profile->save();

        $this->syncKorong($validated['nama_korong'] ?? []);

        return redirect('/admin?panel=statistik')->with('success', 'Statistik Nagari berhasil disimpan.');
    }

    /**
     * Samakan daftar Korong dengan nama-nama yang diinput admin. Korong lama yang
     * kelebihan (jumlah dikurangi) tidak dihapus -- cuma dinonaktifkan -- supaya data
     * UMKM/Potensi/Lokasi yang masih terkait korong tersebut tidak ikut hilang.
     */
    private function syncKorong(array $names): void
    {
        $existing = Korong::orderBy('sort_order')->orderBy('id')->get();
        $targetCount = count($names);

        foreach ($existing as $i => $korong) {
            if ($i < $targetCount) {
                $korong->name = trim($names[$i]);
                $korong->is_active = true;
                $korong->sort_order = $i;
                $korong->save();
            } else {
                $korong->is_active = false;
                $korong->save();
            }
        }

        for ($i = $existing->count(); $i < $targetCount; $i++) {
            $name = trim($names[$i]);
            Korong::create([
                'name' => $name,
                'slug' => $this->uniqueSlug(Korong::class, $name, null),
                'is_active' => true,
                'sort_order' => $i,
            ]);
        }
    }
}
