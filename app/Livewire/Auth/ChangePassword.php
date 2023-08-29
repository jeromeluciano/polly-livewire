<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Rule('required')]
    public $token = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    #[Rule('required|min:8|same:password')]
    public $password_confirmation = '';

    function mount()
    {
        $this->fill([
           'token' => request('token'),
           'email' => request('email')
        ]);
    }
    
    function changePassword(Request $request)
    {
        $credentials = $this->validate();

        $status = Password::reset(
            $credentials, 
            function(User $user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                
                $user->save();

                $this->reset('password', 'password_confirmation');

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET ? 
            back()->with('status', 'Password reset successfully!')
            : back()->withErrors(['email' => [$status]]);
    }

    public function render()
    {
        return view('livewire.auth.change-password');
    }
}
