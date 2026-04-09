<?php

namespace App\Livewire;

use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;


#[Layout('layouts.app')]

class Sell extends Component
{
    use WithFileUploads;

    public $name = '';
    public $description = '';
    public $price = '';
    public $image;
    public $category = '';

    public function rules()
    {
        return [
            'name'        => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'price'       => 'required|numeric',
            'image'       => 'required|max:1024',
            'category'    => 'required',
        ];
    }

    public function save()
    {

        $this->validate();

        $imagePath = $this->image->store('products', 'public');

        ProductModel::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $imagePath,
            'category' => $this->category,
            'user_id' => Auth::id(),
        ]);


        $this->reset();

        return redirect()->route('home')->with('message', 'Product successfully posted!')->with('type', 'success');
    }


    public function render()

    {

        return view('livewire.sell');
    }
}
