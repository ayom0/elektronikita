<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id(); // Optional, primary key for the pivot table
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products', 'id_produk')->onDelete('cascade'); // Reference to 'id_produk'
            $table->integer('quantity'); // Store the quantity of the product
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
