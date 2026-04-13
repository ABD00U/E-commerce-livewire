<?php

namespace App\Livewire;

use App\Models\orders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderHistory extends Component
{
    public $orders;


    public function mount()
    {
        $this->orders = orders::where('user_id', Auth::id())
            ->with('items.product')
            ->get();

    }


    public function render()
    {
        return view('livewire.order-history');
    }
}
