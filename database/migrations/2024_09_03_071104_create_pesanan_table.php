<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan'); // Primary key with 'id_pesanan'
            $table->foreignId('id_transaksi')->constrained('transaksi', 'id_transaksi')->onDelete('cascade'); // Foreign key to 'transaksi'
            $table->integer('jumlah'); // Quantity of items
            $table->decimal('subtotal', 10, 2); // Subtotal amount
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanans'); // Drops pesanans table
    }
}
