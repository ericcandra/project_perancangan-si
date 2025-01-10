<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat pengguna default
        User::create([
            'name' => 'Admin User',
            'email' => 'speed@example.com',
            'password' => Hash::make('password'),
        ]);

        // Tambahkan pengguna lainnya menggunakan factory
        User::factory(5)->create();
    }
}

