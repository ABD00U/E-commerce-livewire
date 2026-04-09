<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;


#[Layout('layouts.app')]
class Register extends Component
{

    public $name = "";
    public $phone = "";
    public $password = "";
    public $password_confirmation = "";


    protected $rules = [
        'name' => 'required|min:3',
        'phone' => 'required|starts_with:01|digits:11|unique:users',
        'password' => 'required|confirmed|min:8',

    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();


        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'password' => bcrypt($this->password),
        ]);

        if ($user) {
            $login =   Auth::attempt([
                'phone' => $this->phone,
                'password' => $this->password
            ]);
        }
        if ($login) {
            return redirect()->route('home')->with('message', 'You have registered successfully')->with('type', 'success');
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
