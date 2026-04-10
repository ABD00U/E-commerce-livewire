<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartModel extends Model
{
    protected $table = 'cart';


    public $fillable = [
        "product_id",
        "user_id",
        "quantity",
        "price",
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(ProductModel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
