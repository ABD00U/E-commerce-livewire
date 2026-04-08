<?php

namespace App\Livewire;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductDetails extends Component
{
    public ProductModel $item;
    public int $quantity = 1;

    public function mount(int $id): void
    {
        $this->item = ProductModel::findOrFail($id);

        $this->quantity = $this->getCartItem()?->quantity ?? 1;
    }

    public function increment(): void
    {
        $this->quantity++;
        $this->dispatch('cart-updated');
    }

    public function decrement(): void
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->dispatch('cart-updated');
        }
    }

    public function addToCart(): void
    {
        if (Auth::guest()) {
            session(['guest' => true]);
            $this->dispatch('open-auth-modal');
            return;
        }

        $cart = $this->getCartItem();

        if ($cart) {
            $cart->update(['quantity' => $this->quantity]);
        } else {
            CartModel::create([
                'product_id' => $this->item->id,
                'quantity'   => $this->quantity,
                'user_id'    => Auth::id(),
                'price'      => $this->item->price,
            ]);
        }

        $this->dispatch('cart-updated');

        $this->flashSuccess('Product added to cart successfully!');
    }


    private function getCartItem(): ?CartModel
    {
        return CartModel::where('user_id', Auth::id())
            ->where('product_id', $this->item->id)
            ->first();
    }

    private function flashSuccess(string $message): void
    {
        $this->dispatch('flash', message: $message, type: 'success');
    }



    public function render()
    {
        return view('livewire.product-details');
    }
}
