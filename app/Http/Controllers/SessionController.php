<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{


    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'login_error' => 'Invalid email or password',
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
