<?php

namespace App\Http\Controllers;

use App\Models\FAQModel;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index() {
        return view('FAQ.index', [
            'title' => 'Dayu Jimpitan | Halaman FAQ'
        ]);
    }
}
