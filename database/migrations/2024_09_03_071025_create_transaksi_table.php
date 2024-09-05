<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi'); // Primary key with 'id_transaksi'
            $table->date('tanggal'); // Date of transaction
            $table->decimal('total_transaksi', 10, 2); // Total transaction amount
            $table->string('metode'); // Payment method
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade'); // Foreign key to 'users'
            $table->string('status'); // Status of transaction
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi'); // Drops transaksi table
    }
}
