<?php

namespace App\Http\Controllers;

use App\Models\project_milestones;
use Illuminate\Http\Request;

class ProjectMilestonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('OpdReqProject.milestone');
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
     * @param  \App\Models\project_milestones  $project_milestones
     * @return \Illuminate\Http\Response
     */
    public function show(project_milestones $project_milestones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_milestones  $project_milestones
     * @return \Illuminate\Http\Response
     */
    public function edit(project_milestones $project_milestones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project_milestones  $project_milestones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project_milestones $project_milestones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_milestones  $project_milestones
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_milestones $project_milestones)
    {
        //
    }
}
