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
                    <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
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

            <div class="col-lg-15 col-xxl-4 mb-3">
              <div class="card mx-3 border-0" style="background-color:lightsteelblue">
                <div class="card-body">
                    <p class="fs-9 fw-bold text-start">
                        <a class="btn btn-light me-6" href=""><i class="bi bi-calendar4-week"></i> Calendar Event</a>
                        <strong style="color: #57575A; margin-left: 3.5%;">General Project / </strong>
                        <strong>
                          <a href="#" style="color: #0064af;">Project System Attendance</a>
                        </strong>
                        <button class="btn btn-light" style="margin-left: 32%;">Mark as read</button>
                        <button class="btn btn-light"><i class="bi-box-arrow-right"></i></button>
                        <div class="d-flex">
                          <h5 style="color: #57575A; margin-left: 18%;"><strong>Meeting with Stakeholders</strong></h5>
                          <a href="" style="margin-left: 42%;">Expand Details</a>
                        </div>
                        <div class="d-flex">
                          <h6 style="color: #57575A; margin-left: 18%;">Created by Rara</h6>
                          <h6 style="color: #57575A; margin-left: 5%;">Ends May 23 - 4:00 PM</h6>
                        </div>
                    </p>
                </div>
              </div>
            </div>
            <div class="col-lg-15 col-xxl-4 mb-5">
              <div class="card mx-3 border-0" style="background-color:lightsteelblue">
                <div class="card-body">
                    <p class="fs-9 fw-bold text-start">
                        <a class="btn btn-light me-6" href=""><i class="bi bi-calendar4-week"></i> Calendar Event</a>
                        <strong style="color: #57575A; margin-left: 3.5%;">General Project / </strong>
                        <strong><a href="#" style="color: #0064af;"> Project System Attendance</a></strong>
                        <button class="btn btn-light" style="margin-left: 32%;">Mark as read</button>
                        <button class="btn btn-light"><i class="bi-box-arrow-right"></i></button>
                        <div class="d-flex">
                          <h5 style="color: #57575A; margin-left: 18%;"><strong>Meeting with Stakeholders</strong></h5>
                          <a href="" style="margin-left: 42%;">Expand Details</a>
                        </div>
                        <div class="d-flex">
                          <h6 style="color: #57575A; margin-left: 18%;">Created by Rara</h6>
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
              <div><hr style="margin-top: -4%;">
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    @endsection