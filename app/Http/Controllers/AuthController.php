<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['title' => 'Login Form']);
    }
    public function showRegisterForm()
    {
        return view('auth.register',  ['title' => 'Register Form']);
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:30',
            'password' => 'required|min:6',
            'konfirmasi_password' => 'required|same:password',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.form')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
