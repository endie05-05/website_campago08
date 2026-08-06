<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\LocationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = LocationCategory::where('slug', 'fasilitas-umum')->value('id');

        if (! $categoryId) {
            return;
        }

        // Sesuai daftar Fasilitas Umum yang sudah tampil di beranda.
        $names = [
            'Balai Pertemuan Nagari - Korong Bukik Gonggang',
            'SD Negeri 01 Campago - Korong Kampung Dalam',
            'Pasar Campago - Korong Kampung Pauh',
            'Posyandu Melati - Korong Padang Manih',
            'Lapangan Serbaguna - Korong Kampung Tanjuang',
            'Kantor Wali Nagari - Korong Bukik Caliak',
        ];

        Location::where('location_category_id', $categoryId)->delete();

        foreach ($names as $name) {
            Location::create([
                'location_category_id' => $categoryId,
                'name' => $name,
                'slug' => Str::slug($name),
                'latitude' => 0,
                'longitude' => 0,
                'status' => 'published',
            ]);
        }
    }
}
