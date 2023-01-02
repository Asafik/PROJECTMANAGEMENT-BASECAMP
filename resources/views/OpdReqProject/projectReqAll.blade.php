@extends('layout.master') @section('content')
    
<section class="pt-3">
    <div class="container px-lg-0">
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-0">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-15 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body p-4 p-lg-5 pt-0 pt-lg-0">
                          <div style="width: 100%" class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-center">
                            <span style="color: #fff;">
                              <strong>All Project Request</strong>
                          </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Project Type</th>
                                    <th scope="col">Project Description</th>
                                    <th scope="col">OPD Name</th>
                                    <th scope="col">Project Files</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @php
                                      $no = 1;
                                  @endphp
                                  @foreach ($data as $item)
                                  <tr>
                                    <td>{{ $no++ }}</td>
                                    <td class="col-3">{{ $item->project_name }}</td>
                                    <td class="col-2">{{ $item->project_type }}</td>
                                    <td class="col-3">{{ $item->description }}</td>
                                    <td>{{ $item->opd_name }}</td>
                                    <td><a href="project_files/{{ $item->project_files }}" style="color: black"><i class="bi bi-file-earmark-text"></i>Download</a></td>
                                    <td>
                                        <a href="/projectReq_details/{{ $item->id }}" style="color: orange"><i class="bi bi-eye"></i></a>
                                        <a href="/projectReq_edit/{{ $item->id }}" style="color: blue"><i class="bi bi-pencil"></i></a>
                                        <a href="/projectReq_delete/{{ $item->id }}" style="color: red" onclick="return confirm('Are you sure want to delete?')"><i class="bi bi-trash"></i></a>                                        
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              <button type="button" class="btn btn-light" style="background-color: #20B15A;"><a href="/projectReq" style="color: #20B15A;"><span class="" style="color: #fff">Back to Request Project
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    @endsection