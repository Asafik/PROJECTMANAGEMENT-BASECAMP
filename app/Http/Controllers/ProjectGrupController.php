<?php

namespace App\Http\Controllers;

use App\Models\Project_grup;
use App\Models\projects;
use Illuminate\Http\Request;

class ProjectGrupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_grup = Project_grup::all();
        return view('project.index',compact('project_grup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project_grup::create($request->except(['_token','submit']));
       return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project_grup  $project_grup
     * @return \Illuminate\Http\Response
     */
    public function show(Project_grup $project_grup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project_grup  $project_grup
     * @return \Illuminate\Http\Response
     */
    public function edit(Project_grup $project_grup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project_grup  $project_grup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project_grup $project_grup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project_grup  $project_grup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project_grup $project_grup)
    {
        //
    }
}
