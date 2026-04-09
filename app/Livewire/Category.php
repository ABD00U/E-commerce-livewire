<?php

namespace App\Livewire;

use App\Models\ProductModel;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class Category extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public string $search = '';

    #[Url]
    public string $category = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingCategory(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.category', [
            'products' => $this->getProducts(),
        ]);
    }

    private function getProducts()
    {
        return ProductModel::query()
            ->when($this->category, fn($q) => $q->where('category', $this->category))
            ->when($this->search,   fn($q) => $q->where('name', 'like', '%' . $this->search . '%'))
            ->paginate(12);
    }
}
