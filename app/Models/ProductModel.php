<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    protected $table = "products";

    public $fillable = [
        "name",
        "description",
        "price",
        "image",
        "category",
        "user_id",

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cart(): HasMany
    {
        return $this->hasMany(CartModel::class, 'product_id');
    }
    public function order(): HasMany
    {
        return $this->hasMany(ordersItems::class, 'product_id');
    }
}
