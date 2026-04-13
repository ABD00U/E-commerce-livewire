<?php

namespace App\Livewire;

use App\Models\CartModel;
use App\Models\orders;
use App\Models\ordersItems;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]

class Cart extends Component
{
    public $items;
    public $total;

    public $name = '';
    public $cardNumber = '';
    public $cvv = '';
    public $expiryDate = '';
    public $address = '';

    protected $rules = [
        'name' => 'required|string|max:50',
        'cardNumber' => 'required | numeric | digits:16',
        'cvv' => 'required | numeric | digits:3',
        'expiryDate' => 'required',
        'address' => 'required | string | max:255',
    ];

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


    public function checkout()
    {
        $this->validate();


        $order = orders::create([
            'user_id' => Auth::id(),
            'total'   => $this->total,
        ]);

        foreach ($this->items as $item) {
            ordersItems::create([
                'order_id'   => $order->id,
                'product_id' => $item->product_id,
                'quantity'   => $item->quantity,
                'price'      => $item->product->price,
            ]);
        }

        foreach ($this->items as $item) {
            $item->delete();
        }

        $this->dispatch('cart-updated');
        $this->mount();
        return redirect('/history');
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
