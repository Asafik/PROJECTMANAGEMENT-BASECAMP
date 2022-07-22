<?php

namespace App\Http\Controllers;

use App\Models\external_users;
use Illuminate\Http\Request;

class ExternalUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.signup');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function show(external_users $external_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function edit(external_users $external_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, external_users $external_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\external_users  $external_users
     * @return \Illuminate\Http\Response
     */
    public function destroy(external_users $external_users)
    {
        //
    }
}
