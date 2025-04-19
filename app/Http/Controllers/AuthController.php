<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek apakah login berhasil
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Redirect ke halaman home setelah login berhasil
            return redirect()->route('home.index');
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
