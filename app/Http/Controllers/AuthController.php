<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registerpost(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat user baru
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

      public function loginpost(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autentikasi
        if (auth()->attempt($request->only('email', 'password'))) {
            // Jika login berhasil, redirect ke halaman home
            return redirect()->route('home');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}

