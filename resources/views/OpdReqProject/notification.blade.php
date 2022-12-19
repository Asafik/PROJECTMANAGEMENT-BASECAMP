@extends('layout.master') @section('content')
    
<section>  
<!-- Page Content-->
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="card border-0">
            <!-- Page Features-->
            <div class="card mt-3 mb-3 mx-3 border-0" style="background-color:lightsteelblue">
              <div class="card-body">
                <div class="d-flex"> 
                    <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-funnel-fill"  style="color: darkblue"></i><strong style="color: darkblue;">Filter</strong>
                    </a>
                    <button class="btn btn-success me-3 border-0" style="background-color:darkblue">Recap</button>
                    {{-- <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button> --}}
                    <!-- Button trigger modal -->
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>   
                </div>
              </div>
            </div>

          <!-- Modal setting-->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                      <form action="/storetask" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Notifications Unread</label>
                          </div>
                          <div class="mb-3">
                            
                            <label for="exampleInputEmail1" class="form-label">Shift Deadlines </label>
                          </div>
                          <div class="mb-3">
                            
                            <label for="exampleInputEmail1" class="form-label">Collapse | Expand Subtask</label>
                          </div>
                          <div class="mb-3">
                            
                            <label for="exampleInputEmail1" class="form-label">Task Counts Show | Hide </label>
                          </div>
                          <div class="mb-3">
                            
                            <label for="exampleInputEmail1" class="form-label">Delete Completed Task </label>
                          </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            
            <div class="mt-3 mb-3 d-flex"> 
              <div class="me-3"></div>
              <button class="btn btn-secondary border-0" style="background-color:grey"><i class="bi bi-bell-fill" style="color: white"></i></button>
              <div class="me-2"></div>
              <h4 style="color: #57575A;" class="me-auto">Other Items Notifications</h4>
              <a href=""style="background-color:#ffff"><i class="bi bi-chevron-down me-3"  style="color: #57575A;"></i></a>
            </div>

            <div class="mb-3">
              <div class="card mx-3 border-0" style="background-color:lightsteelblue">
                <div class="card-body">
                    <p class="fs-9 fw-bold text-start">
                        <a class="btn btn-light me-6" href=""><i class="bi bi-calendar4-week"></i> Calendar Event</a>
                        <strong style="color: #57575A; margin-left: 3.5%;">General Project / </strong>
                        <strong>
                          <a href="#" style="color: #0064af;">Project System Attendance</a>
                        </strong>
                        <button class="btn btn-light" style="margin-left: 41.5%;">Mark as read</button>
                        <button class="btn btn-light"><i class="bi-box-arrow-right"></i></button>
                        <div class="d-flex">
                          <h5 style="color: #57575A; margin-left: 16%;"><strong>Meeting with Stakeholders</strong></h5>
                          <a href="" style="margin-left: 50%;">Expand Details</a>
                        </div>
                        <div class="d-flex">
                          <h6 style="color: #57575A; margin-left: 16%;">Created by Rara</h6>
                          <h6 style="color: #57575A; margin-left: 5%;">Ends May 23 - 4:00 PM</h6>
                        </div>
                    </p>
                </div>
              </div>
            </div>
            <div class="mb-5">
              <div class="card mx-3 border-0" style="background-color:lightsteelblue">
                <div class="card-body">
                    <p class="fs-9 fw-bold text-start">
                        <a class="btn btn-light me-6" href=""><i class="bi bi-calendar4-week"></i> Calendar Event</a>
                        <strong style="color: #57575A; margin-left: 3.5%;">General Project / </strong>
                        <strong><a href="#" style="color: #0064af;"> Project System Attendance</a></strong>
                        <button class="btn btn-light" style="margin-left: 41.5%;">Mark as read</button>
                        <button class="btn btn-light"><i class="bi-box-arrow-right"></i></button>
                        <div class="d-flex">
                          <h5 style="color: #57575A; margin-left: 16%;"><strong>Meeting with Stakeholders</strong></h5>
                          <a href="" style="margin-left: 50%;">Expand Details</a>
                        </div>
                        <div class="d-flex">
                          <h6 style="color: #57575A; margin-left: 16%;">Created by Rara</h6>
                          <h6 style="color: #57575A; margin-left: 5%;">Ends May 23 - 4:00 PM</h6>
                        </div>
                    </p>
                </div>
              </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"  style="color: #57575A;"></i>&nbsp Filters</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="container">
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Project</label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <select class="form-select" id="inputGroupSelect02">
                              <option selected>Select</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Project Group</label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <select class="form-select" id="inputGroupSelect02">
                              <option selected>Select</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Applications</label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <select class="form-select" id="inputGroupSelect02">
                              <option selected>Select</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Assigned To</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                          <select class="form-select" id="inputGroupSelect02">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <select class="form-select" id="inputGroupSelect02">
                          <option selected>Select</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Priority</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <select class="form-select" id="inputGroupSelect02">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
              </div>

              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Created By</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <select class="form-select" id="inputGroupSelect02">
                      <option selected>Select</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary-outline me-auto btn" data-bs-dismiss="offcanvas" aria-label="Close"><strong style="color: darkblue;">Cancel</strong></button>
              <a href="#" class="btn btn-secondary-outline me-auto btn">
                <i class="bi bi-funnel-fill"  style="color: darkblue"></i><strong style="color: darkblue;">Apply</strong>
              </a>
            </div>
            </form>
          </div>
        </div>

      
          
      </div>
    </div>

    @endsection