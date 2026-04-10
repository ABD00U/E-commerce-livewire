<?php

namespace App\Livewire;

use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]

class Cart extends Component
{
    public $items;
    public $total;


    public function mount()
    {
        $this->items  = CartModel::where('user_id', Auth::user()->id)->with('product')->get();
        
        $this->total = 0;
        foreach ($this->items as $item) {
            $price = $item->product->price;
            $quantity = $item->quantity;
            $this->total += $price * $quantity;
        }
    }
    public function decrement($id)
    {
        $item = CartModel::find($id);
        if ($item->quantity == 1) {
            return;
        }
        $item->quantity--;
        $item->save();
        $this->dispatch('cart-updated');
        $this->mount();
    }

    public function increment($id)
    {
        $item = CartModel::find($id);
        $item->quantity++;
        $item->save();
        $this->dispatch('cart-updated');
        $this->mount();
    }

    public function remove($id)
    {
        $item = CartModel::find($id);
        $item->delete();
        $this->dispatch('cart-updated');
        $this->mount();
    }

    public function render()

    {
        return view('livewire.cart');
    }
}
