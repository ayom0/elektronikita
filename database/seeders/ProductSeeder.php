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

        DB::table('products')->insert([
            [
                'nama_produk' => 'Asus Vivobook 14 A1404VA',
                'foto' => 'product_images/asus i3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 7359000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Asus Vivobook 15 A1404VA',
                'foto' => 'product_images/asusi7.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 12359000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Asus Vivobook 14 E410KA',
                'foto' => 'product_images/asuscleron.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5399000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS VIVOBOOK GO 14 FLIP',
                'foto' => 'product_images/asuslipat.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 6999000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'HP 14S-DQ5120TU - i7',
                'foto' => 'product_images/hpi7.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 10899000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'HP 245 G10 - AMD Ryzen 3',
                'foto' => 'product_images/hprzyen3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5199000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'HP PAVILION X360 14-EK1069TU',
                'foto' => 'product_images/hplipat.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 13559000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Lenovo Ideapad 3 14IAU7',
                'foto' => 'product_images/lenovoi3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5920000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Lenovo Ideapad 5 14ABA7',
                'foto' => 'product_images/lenovorzyen7.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9859000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' Lenovo Ideapad 5 2in1',
                'foto' => 'product_images/lenovolipat.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 16759000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI MODERN 14 C12MO',
                'foto' => 'product_images/msii5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 8999000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' MSI PRESTIGE 14 AI',
                'foto' => 'product_images/msicore.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 21999000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Dell Inspiron 5430',
                'foto' => 'product_images/dell.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 10499000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'APPLE MacBook Air M2',
                'foto' => 'product_images/macm2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 16599000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'APPLE MacBook Air M3',
                'foto' => 'product_images/macm3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 18599000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ACER SWIFT GO AI SFG14',
                'foto' => 'product_images/acercore.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 12099000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ACER ASPIRE LITE AL14',
                'foto' => 'product_images/aceri5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 8299000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ADVAN SOULMATE Celeron',
                'foto' => 'product_images/advanceleron.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2255000,
                'id_kategori' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AOC 25G3Z 25" IPS ',
                'foto' => 'product_images\monitorgamaoc.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3399000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AOC 24G4E 24" IPS  ',
                'foto' => 'product_images\monitorgamaoc2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' =>  1849000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AOC 27G4 27" IPS',
                'foto' => 'product_images\monitorgamaoc3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2299000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG Strix XG27AQMR 27',
                'foto' => 'product_images\monitorgamrog.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 14399000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS TUF VG249Q3A 24',
                'foto' => 'product_images\monitorgamrog3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1999000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG Strix XG27ACS 27',
                'foto' => 'product_images\monitorgamrog2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3789000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'KOORUI 22R1AS 22',
                'foto' => 'product_images\monitorgamkur.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 959000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'KOORUI 34Z1UC 34',
                'foto' => 'product_images\monitorgamkur2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3490000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'KOORUI 27Z1Q 27',
                'foto' => 'product_images\monitorgamkur3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2990000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO G34w-30 34',
                'foto' => 'product_images\monitorgamlen.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4988000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO G32QC-30 32',
                'foto' => 'product_images\monitorgamlen2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4078000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO Legion R45w-30 45',
                'foto' => 'product_images\monitorgamlen3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 12775000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO R27q-30 27',
                'foto' => 'product_images\monitorgamlen4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3475000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LG 27GR75Q-B 27',
                'foto' => 'product_images\monitorgamlg.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3200000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI G2422C 24',
                'foto' => 'product_images\monitorgammsi.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1900000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI G255F 25',
                'foto' => 'product_images\monitorgammsi1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1820000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI MAG 275QF 27',
                'foto' => 'product_images\monitorgammsi2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2970000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);


        DB::table('products')->insert([
            [
                'nama_produk' => 'Samsung Odyssey G4 25',
                'foto' => 'product_images\monitorgammsi4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3575000,
                'id_kategori' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AOC 22B3HM 22',
                'foto' => 'product_images\aoc1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 930000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' AOC 24V5 24',
                'foto' => 'product_images\aoc3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1930000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AOC 24B2H2 24',
                'foto' => 'product_images\aoc2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1269000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS VT229H 22',
                'foto' => 'product_images\asus1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4300000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);
        
        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS VY229HF 22',
                'foto' => 'product_images\asus3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 100000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Enlight 24ENS-B 24',
                'foto' => 'product_images\enlight.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 960000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO D24-40 24',
                'foto' => 'product_images\lenovo1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1090000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LENOVO D32-40 32',
                'foto' => 'product_images\lenovo2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2390000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Lenovo L15 16',
                'foto' => 'product_images\lenovo3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2085000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LG 22MR410 22',
                'foto' => 'product_images\lg1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1085000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LG 25MS500-B 25',
                'foto' => 'product_images\lg2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1335000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LG 32MR50C 32',
                'foto' => 'product_images\lg3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2415000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI PRO MP273U 27',
                'foto' => 'product_images\msi1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4099000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI PRO MP225 22',
                'foto' => 'product_images\msi2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 999000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Samsung M5 M50C 27',
                'foto' => 'product_images\samsung.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2790000,
                'id_kategori' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);


        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce GTX 1650',
                'foto' => 'product_images\GTX.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2190000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 3050',
                'foto' => 'product_images\rtx3060asus.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3120000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' ASUS GeForce RTX 3060',
                'foto' => 'product_images\rtx3060asus2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4790000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' ASUS GeForce RTX 3060',
                'foto' => 'product_images\rtx3060asus3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3890000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4060',
                'foto' => 'product_images\rtx4060asus.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5350000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4060',
                'foto' => 'product_images\rtx4060asus2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5390000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4060 ROG',
                'foto' => 'product_images\rtx4060asus3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 6350000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4060 TI',
                'foto' => 'product_images\rtx4060asus4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9250000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4070',
                'foto' => 'product_images\rtx4070asus.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9450000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4070',
                'foto' => 'product_images\rtx4070asus2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9430000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4070 TI',
                'foto' => 'product_images\rtx4070asus4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 17900000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4080 SUPER',
                'foto' => 'product_images\rtx4080asus.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2250000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4080 SUPER',
                'foto' => 'product_images\rtx4080asus2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 19980000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS GeForce RTX 4090',
                'foto' => 'product_images\rtx4090asus.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 37400000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'GALAX GeForce RTX 4060',
                'foto' => 'product_images\rtxgalax1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4700000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'GALAX GeForce RTX 4060',
                'foto' => 'product_images\rtxgalax2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4850000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'GIGABYTE GeForce RTX 3050',
                'foto' => 'product_images\rtxgiga2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3140000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'GIGABYTE GeForce RTX 3060',
                'foto' => 'product_images\rtxgiga3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4700000,
                'id_kategori' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 3 3200G',
                'foto' => 'product_images\rzyen3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1025000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 4500',
                'foto' => 'product_images\ryzen5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1225000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 4600G',
                'foto' => 'product_images\ryzen5G.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1510000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 5500GT',
                'foto' => 'product_images\ryzen5GT.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1770000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 5600X ',
                'foto' => 'product_images\ryzen5X.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2140000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 7600',
                'foto' => 'product_images\ryzen57.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2990000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 7600X',
                'foto' => 'product_images\ryzen57X.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3420000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 8600G',
                'foto' => 'product_images\ryzen58G.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3390000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 5 9600X',
                'foto' => 'product_images\ryzen59X.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4900000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen 7 5700G',
                'foto' => 'product_images\ryzen7.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2900000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AMD Ryzen Threadripper 7970X',
                'foto' => 'product_images\ryzenultra.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 48790000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i3-12100',
                'foto' => 'product_images\i3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1730000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i3-12100F',
                'foto' => 'product_images\i3F.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1260000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i5-12400',
                'foto' => 'product_images\i512.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2250000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i5-12400F',
                'foto' => 'product_images\i512F.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1750000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i5-13400',
                'foto' => 'product_images\i513.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3290000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' Intel Core i7-12700',
                'foto' => 'product_images\i712.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 4480000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Intel Core i9-14900K',
                'foto' => 'product_images\i9.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 9700000,
                'id_kategori' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS Prime AP201 BLACK',
                'foto' => 'product_images\casing1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1120000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS Prime AP201 WHITE',
                'foto' => 'product_images\casing2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1120000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ProArt PA602',
                'foto' => 'product_images\casing3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3400000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG HYPERION GR701',
                'foto' => 'product_images\casing4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 6300000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS TUF Gaming GT502',
                'foto' => 'product_images\casing5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2350000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair 2000D AIRFLOW RGB',
                'foto' => 'product_images\casing6.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2900000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair 2500X Dual Chamber WHITE',
                'foto' => 'product_images\casing7.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2140000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair 2500X Dual Chamber BLACK',
                'foto' => 'product_images\casing8.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2140000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair 4000D',
                'foto' => 'product_images\casing9.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1125000,
                'id_kategori' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Adata XPG SPECTRIX D35G RGB',
                'foto' => 'product_images\ram1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 665000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Adata XPG SPECTRIX D50 RGB',
                'foto' => 'product_images\ram2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1995000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Adata XPG SPECTRIX D50 RGB',
                'foto' => 'product_images\ram3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 790000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ACER PREDATOR HERMES RGB',
                'foto' => 'product_images\ram4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2230000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => ' ACER PREDATOR VESTA II RGB',
                'foto' => 'product_images\ram5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1870000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI SPATIUM M371',
                'foto' => 'product_images\ssd1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1025000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'OLIDIGM P41 Plus',
                'foto' => 'product_images\ssd2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 699000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'VenomRX VRX ULTRA ',
                'foto' => 'product_images\ss3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 600000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'WD Black SN770M',
                'foto' => 'product_images\ssd4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2730000,
                'id_kategori' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Asus ROG THOR 1200P2',
                'foto' => 'product_images\psu1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 5780000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Asus TUF 750G',
                'foto' => 'product_images\psu2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2210000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair AX1600i DIGITAL',
                'foto' => 'product_images\psu3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 7990000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'MSI MAG A850GL PCIE5',
                'foto' => 'product_images\psu6.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1690000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'LIAN LI EDGE',
                'foto' => 'product_images\psu5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3400000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'Corsair RM850X SHIFT',
                'foto' => 'product_images\psu4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 2295000,
                'id_kategori' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AIGO DARKFLASH C6',
                'foto' => 'product_images\cooler1.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 220000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AIGO DARKFLASH DR12',
                'foto' => 'product_images\cooler2.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 270000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AIGO DARKFLASH Infinity',
                'foto' => 'product_images\cooler3.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 290000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'AIGO DARKFLASH Nebula',
                'foto' => 'product_images\cooler4.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1890000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS ROG Strix LC II',
                'foto' => 'product_images\cooler5.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 3129000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);

        DB::table('products')->insert([
            [
                'nama_produk' => 'ASUS TUF Gaming LC II',
                'foto' => 'product_images\cooler6.jpg',
                'deskripsi' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'harga' => 1192000,
                'id_kategori' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ]);


    }
}
