<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterForm extends Component
{
    #[Rule('required')]
    public $name = '';
    
    #[Rule('required|email|unique:users,email')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    #[Rule('required|min:8|same:password')]
    public $password_confirmation = '';

    #[Rule('accepted')]
    public $terms_condition = false;

    public function save()
    {
        $this->validate();       

        User::query()->create($this->only(['name', 'email', 'password', 'terms_condition']));

        return redirect()->to('/login')->with('status', 'User created!');
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
