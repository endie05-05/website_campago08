<?php

namespace Database\Seeders;

use App\Models\Potential;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PotentialSeeder extends Seeder
{
    public function run(): void
    {
        // Sesuai kartu potensi yang sudah tampil di beranda. Foto belum diisi
        // (featured_image_path null) -- akan diunggah menyusul lewat dashboard admin.
        $potentials = [
            ['name' => 'Pertanian', 'category' => 'pertanian', 'card_size' => 'besar', 'short_description' => 'Hamparan sawah dan ladang yang menjadi sumber kehidupan masyarakat.'],
            ['name' => 'UMKM Lokal', 'category' => 'kerajinan', 'card_size' => 'kecil', 'short_description' => 'Kerajinan dan kuliner khas Campago.'],
            ['name' => 'Budaya Minangkabau', 'category' => 'budaya', 'card_size' => 'kecil', 'short_description' => 'Kesenian dan adat istiadat yang terus lestari.'],
            ['name' => 'Wisata & Alam', 'category' => 'wisata', 'card_size' => 'kecil', 'short_description' => 'Keindahan alam Nagari Campago.'],
        ];

        Potential::withTrashed()->forceDelete();

        foreach ($potentials as $index => $potential) {
            Potential::create([
                'name' => $potential['name'],
                'slug' => Str::slug($potential['name']),
                'category' => $potential['category'],
                'card_size' => $potential['card_size'],
                'short_description' => $potential['short_description'],
                'sort_order' => $index + 1,
                'status' => 'published',
            ]);
        }
    }
}
