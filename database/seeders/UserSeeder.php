<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567890',
                'address' => 'Jl. Admin 123',
                'registration_date' => now(),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081987654321',
                'address' => 'Jl. User 456',
                'registration_date' => now(),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
