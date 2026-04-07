<?php

namespace App\Livewire;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Home extends Component
{
    public $productsData = [];



    public function addToCart($id)
    {


        $product = ProductModel::findOrFail($id);

        if (!$product) {
            return;
        }

        $cart =  CartModel::where('product_id', $id)->where('user_id', Auth::id())->first();

        if ($cart) {
            return $this->dispatch('flash', message: 'Added to cart before!', type: 'success');
        }

        CartModel::create([
            'product_id' => $id,
            "user_id" => Auth::id(),
            'quantity'   => 1,
            'price' => $product->price

        ]);

        $this->dispatch('cart-updated');

        return $this->dispatch('flash', message: 'Added to cart!', type: 'success');
    }

    public function render()
    {
        $this->productsData = ProductModel::get();

        return view('livewire.home');
    }
}
