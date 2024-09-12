<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG STRIX G16',
                'foto' => 'product_images/17mQQpHwNYxeuEDTPwG0G2uiXb4QRWnwV1Dwq0XW.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 35999000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS TUF F16',
                'foto' => 'product_images/5npmJxRo1wkeykjGoBX23q6ZIA7wTTPSrwFN97PJ.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 21998000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS TUF A15',
                'foto' => 'product_images/img70601-1725862363.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 16998000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);
    }
}
