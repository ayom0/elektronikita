<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('id_cart_item'); // Primary key
            $table->foreignId('id_produk')->constrained('products', 'id_produk')->onDelete('cascade'); // Foreign key to products
            $table->integer('jumlah'); // Quantity of the product in the cart
            $table->decimal('subtotal', 10, 2); // Subtotal price
            $table->timestamps(); // Timestamps
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}    
