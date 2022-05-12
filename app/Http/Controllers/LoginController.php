<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('logIn.index', [
            'title' => 'Dayu Jimpitan | Halaman Login'
        ]);
    }

    // Fungsi login beserta otentikasi
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required',
        ]);

        // Jika berhasil diotentikasi lalu diarahkan ke /home
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        // Jika gagal tampilkan pesan ini
        return back()->with('loginFailed', 'Login Failed, Please Try Again!');
    }

    // Fungsi logout dan kembali ke halaman login
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
