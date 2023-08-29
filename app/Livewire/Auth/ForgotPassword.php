<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Rule(rule: 'required|email|exists:users', message: 'Email address is invalid.')]
    public $email = '';

    function resetPassword()
    {
        $credentials = $this->validate();

        $status = Password::sendResetLink(
            $credentials
        );

        if ($status === Password::RESET_LINK_SENT) { 
            $this->reset('email');
            return back()->with('success', $status);
        } 

        return back()->with('failed', 'The email you provided dont exists in our records.');
    }
    
    function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
