<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('logIn.index', [
            'title' => 'Dayu Jimpitan | Halaman Login'
        ]);
    }
}
