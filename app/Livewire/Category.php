<?php

namespace App\Livewire;

use App\Models\ProductModel;
use Livewire\Component;

class Category extends Component
{

    public $search = "";
    public $category = "";


    public function render()
    {
        $query = ProductModel::query();

        if ($this->category) {
            $query->where('category', $this->category);
        }

        if ($this->search) {
            $query->where('name', 'like', $this->search . '%');
        }

        $products = $query->get();

        return view('livewire.category', ['products' => $products]);
    }
}
