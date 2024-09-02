<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component

{
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/admin/login');
    }
    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.admin.app');
    }
}
