<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    protected $table = 'cart';


    public $fillable = [
        "product_id",
        "user_id",
        "quantity",
        "price",
    ];


    public function product()
    {
        return $this->hasMany(ProductModel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
