<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'order_history';

    public $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'total_amount',
        'address'
    ];
}
