<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDashboardController extends Controller
{
    public function index() {
        return view('MyDashboard.index', [
            'title' => 'Dayu Jimpitan | Halaman Dashboard'
        ]);
    }
}
