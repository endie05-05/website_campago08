<?php

namespace Database\Seeders;

use App\Models\VillageProfile;
use Illuminate\Database\Seeder;

class VillageProfileSeeder extends Seeder
{
    public function run(): void
    {
        VillageProfile::firstOrCreate(
            ['name' => 'Nagari Campago'],
            [
                'district' => 'V Koto Kampung Dalam',
                'regency' => 'Padang Pariaman',
                'province' => 'Sumatera Barat',
                'area_km2' => 9.86,
                'description' => 'Website Resmi Nagari Campago, Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman.',
                'population' => 12750,
                'population_year' => 2018,
            ]
        );
    }
}
