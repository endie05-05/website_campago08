<?php

namespace Database\Seeders;

use App\Models\Korong;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KorongSeeder extends Seeder
{
    public function run(): void
    {
        $korongs = [
            'Bukik Gonggang',
            'Kampung Dalam',
            'Kampung Tanjuang',
            'Padang Manih',
            'Kampung Pauh',
            'Bukik Caliak Rawang',
            'Bukik Caliak',
            'Ajuang',
        ];

        foreach ($korongs as $index => $name) {
            Korong::updateOrCreate(
                ['name' => $name],
                [
                    'slug' => Str::slug($name),
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
