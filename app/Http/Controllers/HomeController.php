<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeuanganModel;

class HomeController extends Controller
{
    public function index() {
        return view('Home.index', [
            'title' => 'Dayu Jimpitan | Halaman Home',
            'keuangan' => KeuanganModel::all()
        ]);
    }
}
