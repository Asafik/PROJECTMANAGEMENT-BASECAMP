<?php

namespace App\Http\Controllers;

use App\Models\task_list;
use Illuminate\Http\Request;

class TasksListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.task_list');
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
       task_list::create($request->except(['_token','submit']));
       return redirect('task_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task_list  $task_list
     * @return \Illuminate\Http\Response
     */
    public function show(task_list $task_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task_list  $task_list
     * @return \Illuminate\Http\Response
     */
    public function edit(task_list $task_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task_list  $task_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task_list $task_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task_list  $task_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(task_list $task_list)
    {
        //
    }
}
