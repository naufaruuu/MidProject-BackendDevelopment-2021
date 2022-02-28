<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        //validate
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //auth
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/user');
        }

        return back()->with('loginError', 'Login Failed');
    }
}
