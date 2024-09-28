<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'orders'; // The orders table

    protected $fillable = [
        'order_id',
        'user_id',
        'recipient_name',
        'email',
        'address',
        'message',
        'subtotal',
        'shipping_cost',
        'total',
        'payment_status',
        'snap_token',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')->withPivot('quantity'); // Adjust as needed
    }
}
