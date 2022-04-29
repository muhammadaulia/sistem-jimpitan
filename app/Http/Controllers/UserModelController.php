<?php

namespace App\Http\Controllers;

use App\Models\userModel;
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
            "foto" => userModel::showUser()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(userModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(userModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserModelRequest  $request
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserModelRequest $request, userModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(userModel $userModel)
    {
        //
    }
}
