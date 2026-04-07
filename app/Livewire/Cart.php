<?php

namespace App\Livewire;

use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]

class Cart extends Component
{
    public $productInCart = [];
    public $products=[];



    public function render()

    {

        if (Auth::check()) {
            $this->productInCart = CartModel::where('user_id', Auth::user()->id)->get();
        }

        return view('livewire.cart');
    }
}
