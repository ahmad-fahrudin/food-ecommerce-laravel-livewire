<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect('/admin/dashboard');
        } else {
            session()->flash('error', 'Email atau password salah.');
        }
    }
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layouts.admin.app-auth');
    }
}
