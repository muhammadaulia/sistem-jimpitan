<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('Register.index', [
            'title' => 'Dayu Jimpitan | Halaman Registrasi'
        ]);
    }
    
    public function store(Request $request) {
        // Proses Validasi
        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5'
        ]);
    }
    
    // Cara Lain:
    
    /* 
    public function store() {
        return request()->all();
    }
    */
}
