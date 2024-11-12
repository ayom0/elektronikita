<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarsTable extends Migration
{
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id('id_komentar'); // Primary key with 'id_komentar'
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade'); // Foreign key to 'users'
            $table->unsignedBigInteger('id_produk'); // Tentukan kolom id_produk sebagai unsignedBigInteger
            $table->foreign('id_produk')->references('id_produk')->on('products')->onDelete('cascade');
            $table->string('nama');
            $table->text('isi_komentar'); // Comment content
            $table->unsignedTinyInteger('rating')->nullable(); // Add rating column, nullable (0-5)
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('komentars'); // Drops komentars table
    }
}
