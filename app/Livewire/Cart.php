<?php

namespace App\Livewire;

use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $productInCart = [];
    public $products=[];



    public function render()

    {

        if (Auth::check()) {
            $this->productInCart = CartModel::where('user_id', Auth::user()->id)->get();
        }

        return view('livewire.cart')->layout('layouts.app');
    }
}
