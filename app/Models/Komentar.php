<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';
    protected $primaryKey = 'id_komentar'; // Sesuaikan dengan nama kolom ID
   


    protected $fillable = ['id_user', 'id_produk', 'isi_komentar' , 'nama' , 'rating'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produk');
    }
}
