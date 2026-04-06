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
    public ProductModel $item;

    public $quantity;

    public $userId;

    public function mount($id)
    {
        $this->item = ProductModel::findOrFail($id);
        $this->userId = auth()->id();
    }
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

        if (!$this->item) {
            return;
        }
        $cart = $this->item->cart->where('user_id', $this->userId)->first();

        if ($cart) {
            $cart->quantity = $this->quantity;
            $cart->save();
        } else {

            CartModel::create([
                'product_id' => $id,
                'quantity' => $this->quantity,
                'user_id' => $this->userId,
                "price" => $this->item->price

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

        return view('livewire.product-details')->layout('layouts.app');
    }
}
