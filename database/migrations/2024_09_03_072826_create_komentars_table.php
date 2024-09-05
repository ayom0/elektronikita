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
            $table->foreignId('id_produk')->constrained('products', 'id_produk')->onDelete('cascade'); // Foreign key to 'products'
            $table->text('isi_komentar'); // Comment content
            $table->date('tanggal'); // Date of comment
            $table->unsignedTinyInteger('rating'); // Rating (1-255)
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('komentars'); // Drops komentars table
    }
}

