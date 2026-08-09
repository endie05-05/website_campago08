<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@campago.desa.id'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), // password default
                'role' => 'super_admin',
                'is_active' => true,
            ]
        );
    }
}
