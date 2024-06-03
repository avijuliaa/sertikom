<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login (Request $request)
    {
        $creedentials = $request->only('email', 'password');

        if (Auth::attempt($creedentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect('login')->with('error', 'Invalid credentials');
    }
}
