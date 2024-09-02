<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Auth\Login;
use App\Livewire\Admin\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', Login::class)->name('admin.login');
    Route::get('/register', Register::class)->name('admin.register');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
    });
});


require __DIR__ . '/auth.php';
