<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/add-project');
        }

        return redirect()->back()->with('error', 'Invalid email or password!');
    }

      public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
