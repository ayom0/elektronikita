<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaProdukToCartItemsTable extends Migration
{
    public function up()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->string('nama_produk')->nullable()->after('id_produk'); // Menambahkan kolom baru
        });
    }

    public function down()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropColumn('nama_produk'); // Menghapus kolom jika di-rollback
        });
    }
}
