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
        $this->validate($request, [
            'project_name'  => 'required', 'max:255',
            'project_type'  => 'required', 'min:5', 'max:35',
            'description'   => 'required',
            'opd_name'      => 'required', 'min:5', 'max:35',
            'project_files' => 'required', 'mimes:doc, docx, pdf, xls, xlsx, ppt, pptx',
        ]);

        $project_files = $request->file('project_files');
        $nama_files = 'FT'.date('Ymdhis').'.'.$request->file('project_files')->getClientOriginalExtension();
        $project_files->move('project_files/', $nama_files);

        $data = new project_requirement_documents();
        $data->project_name = $request->project_name;
        $data->project_type = $request->project_type;
        $data->description = $request->description;
        $data->opd_name = $request->opd_name;
        $data->project_files = $nama_files;
        $data->save();
        // project_requirement_documents::create($validatedData, $nama_files);

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
        $project_files = $request->file('project_files');
        $nama_files = 'FT'.date('Ymdhis').'.'.$request->file('project_files')->getClientOriginalExtension();
        $project_files->move('project_files/', $nama_files);

        $data = project_requirement_documents::where('id', $id)->first();
        $data->project_name = $request->project_name;
        $data->project_type = $request->project_type;
        $data->description = $request->description;
        $data->opd_name = $request->opd_name;
        $data->project_files = $nama_files;
        $data->save();
    
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
        $data = project_requirement_documents::where('id', $id)->first();
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
