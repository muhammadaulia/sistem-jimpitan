<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('Register.index', [
            'title' => 'Dayu Jimpitan | Halaman Registrasi'
        ]);
    }
    
    public function store(Request $request) {
        // Proses Validasi
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5'
        ]);
        
        User::create($validatedData);
    }

    
    // Cara Lain:
    
    /* 
    public function store() {
        return request()->all();
    }
    */
}
