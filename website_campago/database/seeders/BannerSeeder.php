<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        // Foto slideshow beranda yang sudah ada, dipindahkan dari public/images/ ke storage
        // supaya bisa dikelola lewat dashboard admin (menu "Foto Beranda").
        $seedImages = [
            'ngaricampago.jpeg',
            'kegiatan-1.jpg',
        ];

        Banner::query()->delete();

        foreach ($seedImages as $index => $filename) {
            $source = public_path('images/'.$filename);

            if (! file_exists($source)) {
                continue;
            }

            $path = 'banners/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($source));

            Banner::create([
                'image_path' => $path,
                'sort_order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
