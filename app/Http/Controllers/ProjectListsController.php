<?php

namespace App\Http\Controllers;

use App\Models\project_lists;
use App\Models\project_tasks;
use Illuminate\Http\Request;

class ProjectListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $project_lists = project_lists:: all();
       return view('project.project_list', compact(['project_lists']));
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
        project_lists::create($request->except(['_token','submit']));
        return redirect ('project_list'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project_lists  $project_lists
     * @return \Illuminate\Http\Response
     */
    public function show(project_lists $project_lists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_lists  $project_lists
     * @return \Illuminate\Http\Response
     */
    public function edit(project_lists $project_lists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project_lists  $project_lists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project_lists $project_lists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_lists  $project_lists
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = project_tasks::find($id);
        $data->delete();
        return redirect('project_list')->with('success', 'Project List Has Been Deleted!');
    }
}
