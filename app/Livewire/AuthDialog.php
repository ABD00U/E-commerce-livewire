<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class AuthDialog extends Component
{
    public $isOpen = false;


    public function mount()
    {
        if (session()->pull('guest') === 'auth_required') {
            $this->isOpen = true;
        }
    }
    #[On('open-auth-modal')]
    public function showModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.auth-dialog');
    }
}
