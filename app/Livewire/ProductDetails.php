<?php

namespace App\Livewire;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    public $id;

    public $similerProductInCart = [];
    public $item = [];

    public $quantity = 1;


    public function increment()
    {
        $this->quantity++;
        $this->updateCart();
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->updateCart();
        }
    }

    public function addToCart($id)
    {

        $product = ProductModel::findOrFail($id);

        if (!$product) {
            return;
        }
        $cart = CartModel::where('product_id', $id)->where('user_id', auth()->id())->first();

        if ($cart) {
            $cart->quantity = $this->quantity;
            $cart->save();
        } else {

            CartModel::create([
                'product_id' => $id,
                'quantity' => $this->quantity,
                'user_id' => auth()->id(),
                "price" => $product->price

            ]);
        }
        $this->dispatch('cart-updated');
    }
    private function updateCart()
    {
        if (Auth::check()) {
            CartModel::where('user_id', Auth::id())
                ->where('product_id', $this->id)
                ->update(['quantity' => $this->quantity]);
            $this->dispatch('cart-updated');
        }
    }

    public function render()
    {


        $this->item = ProductModel::findOrFail($this->id);


        return view('livewire.product-details')->layout('layouts.app');
    }
}
