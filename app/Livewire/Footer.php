<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Footer extends Component
{

    public function handleRoute($route)
    {
        if (Auth::guest()) {
            session(['guest' => true]);
            $this->dispatch('open-auth-modal');
            return;
        }
        return redirect('/' . $route);
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
