<?php

// app/Http/Controllers/AdminAuthController.php
// app/Http/Controllers/AdminAuthController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $loginField = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginField => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // Cek kredensial
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/menu');
        }

        return back()->withErrors([
            'email' => 'Email, username, atau password salah.',
        ]);
    }
}
