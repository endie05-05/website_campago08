<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Location;
use App\Models\LocationCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LocationController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    public function update(Request $request)
    {
        $validated = $this->validatePanel($request, 'fasum', [
            'deskripsi' => ['required', 'string'],
            'lokasi' => ['required', 'array', 'min:1'],
            'lokasi.*' => ['required', 'string', 'max:200'],
            'foto' => ['nullable', 'image', 'max:8192'],
        ]);

        $category = LocationCategory::where('slug', 'fasilitas-umum')->firstOrFail();

        Setting::set('peta_fasum_deskripsi', $validated['deskripsi']);

        if ($request->hasFile('foto')) {
            $oldPath = Setting::get('peta_foto_path');
            if ($oldPath) {
                Storage::disk('public')->delete($oldPath);
            }
            Setting::set('peta_foto_path', $request->file('foto')->store('peta', 'public'));
        }

        DB::transaction(function () use ($validated, $category) {
            // Daftar lokasi cuma berupa nama teks tanpa detail lain, jadi paling sederhana
            // dan aman: ganti seluruh isi kategori ini dengan daftar yang baru disimpan.
            // forceDelete (bukan delete biasa) karena Location pakai SoftDeletes -- kalau cuma
            // soft-delete, baris lama (dan slug-nya) masih ada dan bikin slug baru bentrok unique.
            Location::where('location_category_id', $category->id)->forceDelete();

            foreach ($validated['lokasi'] as $nama) {
                Location::create([
                    'location_category_id' => $category->id,
                    'name' => $nama,
                    'slug' => $this->uniqueSlug(Location::class, $nama, null),
                    'latitude' => 0,
                    'longitude' => 0,
                    'status' => 'published',
                ]);
            }
        });

        return redirect('/admin?panel=fasum')->with('success', 'Fasilitas Umum berhasil disimpan.');
    }
}
