<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordersItems extends Model
{
    protected $table = 'order_items';

    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(orders::class);
    }
    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
