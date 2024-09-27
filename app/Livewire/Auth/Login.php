<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $this->email)->first();
        if ($user) {
            if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                return redirect(route('home'));

                // return "ok";
            } else {
                session()->flash('error', 'Email or password does not match');
            }
        } else {
            session()->flash('error', 'This Email not found in our database');
        }
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
