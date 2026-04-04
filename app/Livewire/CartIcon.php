<?php

namespace App\Livewire;

use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class CartIcon extends Component
{
    public int $cartCount = 0;

    public function mount(): void
    {
        $this->refreshCount();
    }

    #[On('cart-updated')]  // 👈 listens for this event
    public function refreshCount(): void
    {
        $this->cartCount = Auth::check()
            ? CartModel::where('user_id', Auth::id())->sum('quantity')
            : 0;
    }

    public function render()
    {
        return view('livewire.cart-icon');
    }
}
