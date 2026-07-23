<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@campago.desa.id',
            'password' => Hash::make('password123'), // password default
            'role' => 'super_admin',
            'is_active' => true,
        ]);
    }
}
