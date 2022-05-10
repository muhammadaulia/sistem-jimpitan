<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('Register.index', [
            'title' => 'Dayu Jimpitan | Halaman Registrasi'
        ]);
    }

    /* 
    public function store() {
        return request()->all();
    }
    */

    // Cara Lain:
    
    public function store(Request $request) {
        // Proses Validasi
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5'
        ]);

        // Enkripsi Password

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Atau

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Flash Message Dengan Flash Session

        // $request->session()->flash('success', 'Proses registrasi berhasil, silahkan Login');

        // Atau

        return redirect('/login')->with('success', 'Proses registrasi berhasil, silahkan Login');

        // return redirect mengarahkan ke halaman login setelah tombol registrasi ditekan
    }

}
