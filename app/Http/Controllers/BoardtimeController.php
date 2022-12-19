<?php

namespace App\Http\Controllers;

use App\Models\Timeboard;
use Illuminate\Http\Request;
use Illuminate\Support\Timebox;

class BoardtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeboard = Timeboard::all();
        return view('OpdReqProject.timeboardOpd',compact('timeboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('OpdReqProject.time_board');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Timeboard::create($request->except(['_token','submit']));
        return redirect('timeboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timeboard  $timeboard
     * @return \Illuminate\Http\Response
     */
    public function show(Timeboard $timeboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timeboard  $timeboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeboard $timeboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timeboard  $timeboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timeboard $timeboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timeboard  $timeboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeboard $timeboard)
    {
        //
    }
}