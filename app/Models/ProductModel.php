<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function cart()
    {
        return $this->belongsToMany(CartModel::class);
    }
}
