<?php

namespace App\Http\Controllers;

use App\Models\project as ModelsProject;
use App\Models\projects;
use  App\Models\Project_grup;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $project = projects::with('project_grup')->latest()->paginate();
       return view('Project.index', compact(['project']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('project.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        projects::create($request->except(['_token','submit']));
        return redirect ('project_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = projects::find($id);
        return view('project.project_edit', compact(['projects']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $project = projects::find($id);
        $project ->update ($request->except(['_token','submit']));
        return redirect('/project.project_edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = projects::find($id);
        $project->delete();
        return redirect('/project');
    }

    public function general()
    {
        $project = projects::with('project_grup')->latest()->paginate();
        return view('Project.general_project', compact(['project']));
    }
    public function discuss()
    {
        // $project = projects::with('project_grup')->latest()->paginate();
        return view('Project.discuss');
    }
    public function timeboardproject()
    {
        // $project = projects::with('project_grup')->latest()->paginate();
        return view('Project.timeboardProject');
    }

    public function milestoneproject()
    {
        // $project = projects::with('project_grup')->latest()->paginate();
        return view('Project.milestoneProject');
    }

    // public function timeboard()
    // {
    //     $project = projects::with('project_grup')->latest()->paginate();
    //     return view('Project.time_board', compact(['project']));
        // }
}