<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


use Illuminate\Validation\Rules\Password;

use Illuminate\SUpport\Facades\Auth;





class RegisterController extends Controller
{
    public function create () {
        return view('auth.register');

    }

    public function store () {
        $attributes = request()->validate([
            'username'=>['required'],
            'email'=>['required', 'email', 'confirmed'],
            'password'=> ['required', Password::min(5), 'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/dashboard');
        
    }
}
