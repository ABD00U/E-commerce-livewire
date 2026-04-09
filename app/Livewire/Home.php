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
    public function addToCart(int $id): void
    {
        if (Auth::guest()) {
            $this->dispatch('open-auth-modal');
            return;
        }

        $product = ProductModel::findOrFail($id);

        if ($this->alreadyInCart($id)) {
            $this->dispatch('flash', message: 'Already in your cart!', type: 'warning');
            return;
        }

        CartModel::create([
            'product_id' => $id,
            'user_id'    => Auth::id(),
            'quantity'   => 1,
            'price'      => $product->price,
        ]);

        $this->dispatch('cart-updated');
        $this->dispatch('flash', message: 'Added to cart!', type: 'success');
    }

    public function render()
    {
        return view('livewire.home', [
            'products' => ProductModel::all(),
        ]);
    }

    private function alreadyInCart(int $id): bool
    {
        return CartModel::where('product_id', $id)
            ->where('user_id', Auth::id())
            ->exists();
    }
}
