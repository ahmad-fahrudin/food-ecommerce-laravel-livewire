<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:6|confirmed',
    ];

    public function register()
    {
        $this->validate();

        $user = Admin::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect('/admin/dashboard');
    }
    public function render()
    {
        return view('livewire.admin.auth.register')->layout('layouts.admin.app-auth');
    }
}
