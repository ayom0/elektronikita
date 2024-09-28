<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Menentukan field mana yang dapat diisi massal
    protected $fillable = [
        'name',
        'email',
        'address',
        'message',
    ];
}
