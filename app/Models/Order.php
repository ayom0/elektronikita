<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // In your Order model
protected $keyType = 'string';
public $incrementing = false;


    protected $fillable = [
        'user_id', 'recipient_name', 'email', 'message',
        'subtotal', 'shipping_cost', 'total', 'payment_status',
        'snap_token','order_id'
    ];

    // You can add relationships and other model methods here as needed
}
