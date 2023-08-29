<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    function create()
    {
         return view('auth.forgot-password');
    }

    function edit(string $token)
    {
        return view('auth.reset-password', compact('token'));
    }

    function update(Request $request)
    {
        
    }
}
