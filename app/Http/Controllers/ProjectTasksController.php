<?php

namespace App\Http\Controllers;

use App\Models\project_tasks;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_tasks = project_tasks::all();
        return view('project.project_list',compact('project_tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.project_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       project_tasks::create($request->except(['_token','submit']));
       return redirect('project_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project_tasks  $project_tasks
     * @return \Illuminate\Http\Response
     */
    public function show(project_tasks $project_tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_tasks  $project_tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(project_tasks $project_tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project_tasks  $project_tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project_tasks $project_tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_tasks  $project_tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_tasks $project_tasks)
    {
        //
    }
}
