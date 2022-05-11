<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Models\User;
use App\Http\Requests\StoreuserModelRequest;
use App\Http\Requests\UpdateuserModelRequest;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userProfile.index', [
            "title" => "Dayu Jimpitan | User Profile",
            "user" => User::latest()->get()
        ]);
    }
    
}
