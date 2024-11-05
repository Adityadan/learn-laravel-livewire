<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login Page')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
