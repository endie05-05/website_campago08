<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Models\Location;
use App\Models\LocationCategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    use GeneratesUniqueSlug;

    public function update(Request $request)
    {
        $validated = $request->validate([
            'deskripsi' => ['required', 'string'],
            'area' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'array', 'min:1'],
            'lokasi.*' => ['required', 'string', 'max:200'],
        ]);

        $category = LocationCategory::where('slug', 'fasilitas-umum')->firstOrFail();

        Setting::set('peta_fasum_deskripsi', $validated['deskripsi']);
        Setting::set('peta_fasum_area', $validated['area']);

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

        return redirect('/admin?panel=peta')->with('success', 'Peta Digital berhasil disimpan.');
    }
}
