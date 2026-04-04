<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


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

        if (
            Auth::attempt(['phone' => $this->phone, 'password' => $this->password])

        ) {
            return redirect()->route('home')->with('message', 'You have logged in successfully')->with('type', 'success');
        }
        $this->addError('phone', 'Incorrect phone number or password.');
    }


    public function render()

    {
        return view('livewire.login');
    }
}
