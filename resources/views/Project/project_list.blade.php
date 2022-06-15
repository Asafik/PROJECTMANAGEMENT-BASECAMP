@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-4">
    <div class="container ">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-5 d-flex"> 

                <a class="bi bi-funnel h5 text-decoration-none text-secondary me-3"> Filter</a>
                <a class="bi bi-folder-fill h5 text-decoration-none text-secondary me-3"> Saved Searches</a>
                <a class="bi bi-stack h5 text-decoration-none text-secondary me-auto"></i> Group by</a>
                <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle "></i> Add List</button>
                <button class="btn btn-success me-3"><i class="bi bi-plus-circle "></i> Add Task</button>
                <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear"></i></a>
            </div>
            <div class="col-lg-12 col-xxl-6 mb-3">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                        <div style="width:1100px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href=""><span class="text-white"><strong>Project System Atandance/Analyst and Dokumentasi</strong></a></i></div>
                            <ul>
                                <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <a class="h5 text-decoration-none text-secondary mb-5" href=""><i class="bi bi-plus-circle"></i> add task</a>
        </div>
        <div class="col-lg-12 col-xxl-6 mb-3">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                    <div style="width:1100px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href=""><span class="text-white"><strong>Project System Atandance/UI/UX Desain</strong></a></i></div>
                        <ul>
                            <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="h5 text-decoration-none text-secondary mb-5" href=""><i class="bi bi-plus-circle"></i> add task</a>   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
         <style>
                body {
                                                
                    background-color:#D0D9EE;
                       
                            }
                          </style>
            </div>
        </div> 
    </div>
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection