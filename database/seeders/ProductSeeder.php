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

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI 15 B7ED 029ID',
                'foto' => 'product_images/CQQoLvXZVLw2vvbvG253PrbDSife93SJwIPoSQHU.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9499000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI 16 HX B14VFKG',
                'foto' => 'product_images/oE4mc2BBfFCBMW29YHgXwv4q9yetiY5TgOLjbhMa.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 16998000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
           
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO LOQ 15IRX9',
                'foto' => 'product_images/GnE2swzXqknZK1iP9B895ScHXpTnpXdEF29vFj8c.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 15998000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI 14 AI Studio A1VFG 078ID',
                'foto' => 'product_images/x3eas4q8W7zWHOFfzsieNre9TlSIvulILsfXTVvT.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 28399000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'HP VICTUS 16 R1006TX',
                'foto' => 'product_images/hp victus 16.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 18699000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'HP VICTUS 15 FA1094TX',
                'foto' => 'product_images/hpvictus 15 fa.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 10199000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ACER Nitro V16',
                'foto' => 'product_images/acer nitro v15.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 10898000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI 15 A12UC 622ID',
                'foto' => 'product_images/msi 15 a12uc.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 22998000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG ZEPHYRUS G16',
                'foto' => 'product_images/asusrogzephg16.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 38699000,
                'id_kategori' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);
    }
}
