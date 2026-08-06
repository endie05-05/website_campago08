<?php

namespace Database\Seeders;

use App\Models\Official;
use Illuminate\Database\Seeder;

class OfficialSeeder extends Seeder
{
    public function run(): void
    {
        // Sesuai bagan struktur perangkat Nagari Campago. Foto belum diisi (photo_path
        // null) -- akan diunggah menyusul lewat dashboard admin.
        $officials = [
            ['name' => 'Zulhadi', 'position' => 'Wali Nagari'],
            ['name' => 'Ilfo Azri', 'position' => 'Sekretaris Nagari'],

            ['name' => 'Sri Wahyuni', 'position' => 'Kasi Pemerintahan'],
            ['name' => 'Sabri', 'position' => 'Kasi Kesra'],
            ['name' => 'Lastri Mila Sari', 'position' => 'Kasi Pelayanan'],
            ['name' => 'Irvan', 'position' => 'Kaur Keuangan'],
            ['name' => 'Sri Yunita', 'position' => 'Kaur Umum & Perencanaan'],

            ['name' => 'Fajrul Ikhsan', 'position' => 'Wali Korong Bukik Gonggang'],
            ['name' => 'Davitra Junaidi', 'position' => 'Wali Korong Kampung Dalam'],
            ['name' => 'Eri Faisal', 'position' => 'Wali Korong Kampung Pauh'],
            ['name' => 'Haidil Saputra', 'position' => 'Wali Korong Bukik Caliak'],
            ['name' => 'Edwin Bakar', 'position' => 'Wali Korong Kampung Tanjuang'],
            ['name' => 'Nofri Saputra', 'position' => 'Wali Korong Padang Manih'],
            ['name' => 'Jhonaidy', 'position' => 'Wali Korong Bukik Caliak Rawang'],
            ['name' => 'Hendri Hidayat', 'position' => 'Wali Korong Ajuang'],

            ['name' => 'Gusriadi', 'position' => 'Staf'],
            ['name' => 'Zicky Ihsanul Rijal', 'position' => 'Staf'],
        ];

        Official::query()->delete();

        foreach ($officials as $index => $official) {
            Official::create([
                'name' => $official['name'],
                'position' => $official['position'],
                'sort_order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
