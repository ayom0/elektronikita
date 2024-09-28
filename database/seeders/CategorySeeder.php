<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['kategori' => 'Notebook', 'jenis_kategori' => 'Laptop', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'GamingNotebook', 'jenis_kategori' => 'laptop', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'MonitorGaming', 'jenis_kategori' => 'Monitor', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'MonitorSmart', 'jenis_kategori' => 'Monitor', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'VGA', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'CPU', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Ram', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Casing', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'PSU', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Coller', 'jenis_kategori' => 'KomponenPC', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
