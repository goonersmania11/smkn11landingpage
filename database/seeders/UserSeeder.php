<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat akun Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@smkn11.com',
            'password' => Hash::make('password'), // password login: password
            'role' => 'admin',
        ]);

        // Membuat akun User biasa
        User::create([
            'name' => 'Siswa / User Biasa',
            'email' => 'user@smkn11.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}