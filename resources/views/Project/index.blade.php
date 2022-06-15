@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-2 d-flex"> 
            <p class="bi bi-funnel h5 text-decoration-none text-secondary me-auto"> Filter</p>
            <button type="button" class="btn btn-success me-3"> <i class="bi bi-plus-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New project
              </button></i>
            <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear"></i></a>
        </div>
        <p class="mb-5 h5 text-decoration-none text-black fw-bold me-2"> General Project</p>

        <!-- Page Features-->
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-4 col-xxl-5 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Project System Atandance</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5">
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-check-circle" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                        
                    </div>
                    <!-- <hr size="10px" width="50%" style=""> -->
                </div>
            </div>
            <!-- card project -->
            <div class="col-lg-4 col-xxl-5 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                        <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Project System Atandance</strong></a></i></div>
                            <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5">
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-check-circle" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                        </div>
                    </div>
                </div>
                <!--card update-->
                <div class="col-lg-4 col-xxl-5 mb-5">
                  <div class="card bg-light border-0 h-100">
                      <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                          <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="requestopd.html"><span class="text-white"><strong>Project</strong></a></i></div>
                            <table class="table table-striped table-hover">
                            @foreach ($project as $project)
                            <tr>
                              <td>{{ $project->project_name }} </a> <i class="bi bi-three-dots"></i></td>
                            </tr>
                            @endforeach   
                            <table class="table table-striped table-hover">        
                          <hr>
                              <p class="text-secondary me-auto text-center">View Projects Board</p>
                          </div>
                      </div>
                  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
<div class="container">
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Project </label>
            <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
         
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Project Description</label>
            <input type="text" name="project_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="project_list"> <button type="submit" class="btn btn-primary">Create</button> </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Model -->
    <style>
        body {
                            
          background-color:#D0D9EE;
              background-size: 160% 140%;
                  }
                </style>

</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
    
@endsection