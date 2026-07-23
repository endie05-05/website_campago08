<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Berita Nagari',
            'Kegiatan',
            'Pemerintahan',
            'Pertanian',
            'UMKM',
            'Kesehatan',
            'Kebudayaan',
        ];

        foreach ($categories as $name) {
            PostCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
