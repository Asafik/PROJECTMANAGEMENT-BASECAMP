<?php

namespace App\Http\Controllers;

use App\Models\project_requirement_documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectRequirementDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = project_requirement_documents::paginate(1);
        return view('OpdReqProject.projectReq_index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('OpdReqProject.projectReq_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name'  => ['required', 'max:255'],
            'project_type'  => ['required', 'min:5', 'max:35'],
            'description'   => ['required'],
            'opd_name'      => ['required', 'min:5', 'max:35'],
            // 'project_files' => ['required'],
        ]);

        project_requirement_documents::create($validatedData);

        return redirect('/projectReqSuccess')->with('success', 'Request project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project_requirement_documents  $project_requirement_documents
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = project_requirement_documents::find($id);
        return view('OpdReqProject.projectReqDetails', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_requirement_documents  $project_requirement_documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = project_requirement_documents::find($id);
        $data->update($request->all());

        return redirect('/projectReqSuccess')->with('success', 'Request Project Has Been Updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project_requirement_documents  $project_requirement_documents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = project_requirement_documents::find($id);
        return view('OpdReqProject.projectReq_edit', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_requirement_documents  $project_requirement_documents
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = project_requirement_documents::find($id);
        $data->delete();
        return redirect('/projectReqSuccess')->with('success', 'Request Project Has Been Deleted!');
    }

    public function all()
    {
        $data = project_requirement_documents::all();
        return view('OpdReqProject.projectReqAll', ['data' => $data]);
    }

    public function generalReq(){
        $data = project_requirement_documents::paginate(1);
        return view('OpdReqProject.generalReq', ['data' => $data]);
    }
}
