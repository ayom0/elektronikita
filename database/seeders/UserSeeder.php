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
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone_number' => '081336589373',
                'address' => 'smk',
                'registration_date' => now(),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            
        ]);
    }
}
