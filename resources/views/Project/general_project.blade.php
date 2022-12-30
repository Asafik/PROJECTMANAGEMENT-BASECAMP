@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-3 d-flex">
            <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">
                <i class="bi bi-funnel-fill" style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
            </a>
            <!-- button modal new project -->
            <button type="button" style="background-color:#20B15A ;" class="bi bi-plus-circle btn btn-success me-3 border-0" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@New project">  New project</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            </div>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill"
                    style="color: #838492;"></i></button>
        </div>
        <p class="fw-bolder h5 me-auto mb-4">General Project</p>
        <br>
        <!-- Page Features-->
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-4 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    
                    <div style="width: 100%" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a href="#"><span class="text-white"><strong>Project ABCD</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5 text-center">
                            <a href="/task_list"><button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-check-circle" style="font-size:20px mb-5"></i></button></a>
                            <a href="/discuss"><button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-chat" style="font-size:20px mb-5"></i></button></a>
                            <a href="/milestoneproject"><button type="button"
                                    class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag"
                                        style="font-size:20px mb-5"></i></button></a>
                            <a href="/timeboardproject"><button type="button"
                                    class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock"
                                        style="font-size:20px mb-5"></i></button></a>
                            <a href="#"> <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-calendar" style="font-size:20px mb-5"></i></button></a>
                            <a href="/projectfile"> <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--card update-->
            <div class="col-lg-4 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                        <div style="width: 100%" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a
                                href="#"><span class="text-white"><strong>Project ABCD</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5 text-center">
                            <a href="/task_list"><button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-check-circle" style="font-size:20px mb-5"></i></button></a>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                    class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                    class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card project -->
            <div class="col-lg-4 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                        <div style="width: 100%" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a
                                href=""><span class="text-white"><strong>Project ABCD</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5 text-center">
                            <a href="/task_list"><button type="button" class="btn btn-outline-secondary me-md-2"><i
                                        class="bi bi-check-circle" style="font-size:20px mb-5"></i></button></a>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                    class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4"
                                    style="font-size:20px mb-5"></i></button>
                            <button type="button" class="btn btn-outline-secondary me-md-2"><i
                                    class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- fitur filter -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"
                            style="color: #57575A;"></i>&nbsp Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="#" method="#" enctype="multipart/form-data">
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-4 me-2">Sort by</label>
                            <input type="email" id="appt" name="appt" class="form-control">
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-4">Project Group</label>
                            <select name="status" class="form-select" style="margin-left: 3%;">
                                <option selected>Pilih Group</option>
                                <option value="">General Project 1</option>
                                <option value="">General Project 2</option>
                                <option value="">General Project 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-4">Project</label>
                            <select name="selectproject" class="form-control" style="margin-left: 3%;">
                                <option selected>Pilih Project</option>
                                <option class="form-select " aria-label="Disabled select example" disabled>
                                    DINKES
                                <option value="">Project ABCD</option>
                                </option>
                                <option class="form-select" aria-label="Disabled select example" disabled>
                                    DISBUDPAR
                                <option value="">Project DEFG</option>
                                <option value="">Project EFGH</option>
                                </option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="exampleFormControlTextarea1"
                                class="form-label col-sm-4 me-2">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Close</button>
                            <button type="Submit" class="btn btn-success bi bi-funnel-fill">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end fitur filter -->
            <!-- Modal create project -->
<div class="modal fade" id="exampleModal1" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
  <div class="container">
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Project Group</label>
          <div class="col-sm-7">
            <input type="text" name="project_grups_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="col-sm-2">
            <button type="button" class="bi bi-plus-circle btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalProjectGrup" data-bs-whatever="@New project"></button>
          </div>
      </div>
      
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Project Name</label>
          <div class="col-sm-7">
            <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <a href=""></a>
          </div>
        </div>
  
        <div class="row mb-3" >
          <label for="inputPassword3" class="col-sm-3 col-form-label">Project Description</label>
          <div class="col-sm-7">
            <textarea type="text" name="project_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
          </div>
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <a href="project_list"> <button type="submit" class="btn btn-primary">Create</button> </a>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- End Model -->
  
    <!--modal project grup-->
  <div class="modal fade" id="exampleModalProjectGrup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Grup</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form action="/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Grup Name </label>
                  <input type="text" name="group_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Grup Description</label>
                  <textarea type="text" name="group_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                </div> 
            </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
    <!--End Modal project grup-->
        </div>
    </div>
</section>
@endsection