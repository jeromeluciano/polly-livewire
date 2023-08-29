<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', function() {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function() {
        return view('auth.register');
    })->name('register');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('auth.forgot-password');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'edit'])
        ->name('password.reset');

    Route::post('/reset-password', [ForgotPasswordController::class, 'update'])
        ->name('password.update');
});


Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard.index');

    Route::get('/polls/create', [PollController::class, 'create'])
        ->name('polls.create');
});