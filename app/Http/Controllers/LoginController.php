<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // View for login form (e.g., resources/views/auth/login.blade.php)
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Cari akun berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Login user
            Auth::login($user); // Pastikan user benar-benar login

            // Cek role pengguna dan arahkan ke halaman yang sesuai
            if (Auth::user()->role === 'nakes') {
                return redirect()->intended('/dashboard-nakes'); // Redirect ke dashboard nakes
            }

            return redirect()->intended('/dashboard'); // Redirect ke dashboard wali
        }

        // Jika login gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai.',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logging out
    }
}
