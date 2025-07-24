<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses Login
    public function login(Request $request)
    {
        // Validasi inputan email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6', // Password minimal 6 karakter
        ]);

        // Ambil data email dan password dari form
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman admin
            return redirect()->route('admin'); // Pastikan nama route-nya sesuai
        }
        

        // Jika gagal login, kembali ke form dengan error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    // app/Http/Controllers/AuthController.php

public function admin()
{
    return view('admin');  // Mengarahkan ke halaman dashboard
}

    
    // Proses Logout
    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect()->route('login');

    }
    
}
