<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]

class Login extends Component
{


    public $phone = "";
    public $password = "";
    public $remember = false;


    protected $rules = [
        'phone' => 'required|digits:11|starts_with:01',
        'password' => 'required|min:6',
    ];


    public function login()

    {
        $this->validate();
        if (!Auth::attempt(['phone' => $this->phone, 'password' => $this->password])) {
            $this->addError('phone', 'User Not Found');
            return;
        }

        session()->regenerate();

        $this->redirect(route('home'), navigate: true);
    }


    public function render()

    {
        return view('livewire.login');
    }
}
