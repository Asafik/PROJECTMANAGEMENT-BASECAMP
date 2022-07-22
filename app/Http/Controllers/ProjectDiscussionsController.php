<?php

namespace App\Http\Controllers;

use App\Models\project_discussions;
use Illuminate\Http\Request;

class ProjectDiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('OpdReqProject.discussion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Diskominfos.discussion');
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
     * @param  \App\Models\project_discussions  $project_discussions
     * @return \Illuminate\Http\Response
     */
    public function show(project_discussions $project_discussions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_discussions  $project_discussions
     * @return \Illuminate\Http\Response
     */
    public function edit(project_discussions $project_discussions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project_discussions  $project_discussions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project_discussions $project_discussions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_discussions  $project_discussions
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_discussions $project_discussions)
    {
        //
    }
}
