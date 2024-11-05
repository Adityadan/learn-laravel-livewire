<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    // * VARIABLE VALIDASI
    // #[Validate('required|min:3')]
    // * DEKLARASI VARIABLE
    // public $name;

    // #[Validate('required|email|unique:users')]
    // public $email;
    // #[Validate('required|min:3')]
    // public $password;

    #[Title('Register Page')]

    public RegisterForm $form;

    // * FUNCTION VALIDASI
    // protected function rules()
    // {
    //     return [
    //         'name' => 'required|min:3',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:3',
    //     ];
    // }

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function save()
    {
        // * CONTOH VALIDASI
        // $this->validate([
        //    'name' => 'required|min:3',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required|min:3',
        // ]);


        // ? HANDLER VALIDASI
        $this->validate();

        User::create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'password' => bcrypt($this->form->password),
        ]);

        $this->form->reset();

        return back()->with('success', 'User created successfully');
    }
}
