<?php

namespace Database\Seeders;

use App\Models\LocationCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocationCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Kantor Pemerintahan',
            'Pendidikan',
            'Kesehatan',
            'Tempat Ibadah',
            'UMKM',
            'Pasar',
            'Fasilitas Umum',
            'Wisata',
            'Kebudayaan',
            'Pertanian',
        ];

        foreach ($categories as $index => $name) {
            LocationCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'sort_order' => $index + 1,
            ]);
        }
    }
}
