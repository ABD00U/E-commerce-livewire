<?php

namespace App\Livewire;

use App\Models\orders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class OrderHistory extends Component
{
    use WithPagination;


    public function render()
    {
        $orders = orders::where('user_id', Auth::id())
            ->with('items.product')
            ->paginate(1);


        return view('livewire.order-history', ['orders' => $orders]);
    }
}
