<?php

namespace App\Livewire;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]

class Cart extends Component
{
    public $productInCart = [];
    public ProductModel $products;



    public function render()

    {
        return view('livewire.cart');
    }
}
