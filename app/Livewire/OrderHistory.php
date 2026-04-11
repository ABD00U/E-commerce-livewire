<?php

namespace App\Livewire;

use Livewire\Component;

class OrderHistory extends Component
{
    public $orders;


    public function mount()
    {
        $this->orders = collect([
            (object)[
                'id' => 'ORD-9921-X',
                'quantity' => 1,
                'total_amount' => 1250.00,
                'created_at' => now()->subDays(2),
                'product' => (object)[
                    'name' => 'Linear Processor Core',
                    'price' => 1250.00,
                    'image' => 'products/core-01.png',
                ]
            ],
            (object)[
                'id' => 'ORD-9921-X',
                'quantity' => 1,
                'total_amount' => 1250.00,
                'created_at' => now()->subDays(2),
                'product' => (object)[
                    'name' => 'Linear Processor Core',
                    'price' => 1250.00,
                    'image' => 'products/core-01.png',
                ]
            ],
        ]);
    }
    public $items = [1, 2];
    public function render()
    {
        return view('livewire.order-history');
    }
}
