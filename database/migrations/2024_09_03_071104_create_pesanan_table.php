<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan'); // Primary key pesanan
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('id_produk')->constrained('products', 'id_produk')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('subtotal', 15, 2);
            $table->decimal('shipping_cost', 15, 2)->nullable();
            $table->decimal('total', 15, 2);
            $table->enum('status', ['pending', 'dikirim', 'selesai', 'batal'])->default('pending');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
