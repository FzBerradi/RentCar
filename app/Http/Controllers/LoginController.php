<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboardAdmin');
        }


        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboardManager');
        }



        return back()->withErrors([
            'email' => 'Les informations de connexion ne correspondent pas.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/');
    }
}
