<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{
    #[Rule(rule: 'required|email|exists:users', message: 'Email address is invalid.')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    function mount()
    {
        if ($oldEmail = old('email'))
        {
            $this->email = $oldEmail;
        }
    }

    function authenticate()
    {
        $credentials = $this->validate();

        if (!Auth::attempt($credentials)) 
        {
            $this->addError('message', 'These credentials do not match our records.');
            $this->password = '';
            return back();
                // ->withErrors('These credentials do not match our records.');
        }

        session()->regenerate();

        return redirect()
            ->to(RouteServiceProvider::HOME)
            ->with('status', 'Login Successfully!');
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
