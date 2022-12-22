@extends('layout.master') @section('content')

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbar-nav");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>
</div>
</nav>
<br>   

<!-- Page Content-->
<section class="pt-3">
<div class="container px-lg-0">
<!-- Page Features-->
<div class="col-lg-12 mb-5 d-flex"> 
<span class="h5 text-decoration-none text-black fw-bold me-2">Halo, {{ auth()->user()->name }}!</span>
<a class="h5 text-decoration-none text-secondary me-auto">Stay Healthy.</a>

<!-- button modal new project -->
<button type="button" class="bi bi-plus-circle btn btn-success me-3 border-0" style="background-color:#20B15A ;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@New project">  New project</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
    </div>
    <div class="modal-body">
    <!-- form didalam new project -->
        <form>
            <div class="row mb-3">
              <label for="inputProjectGroup" class="col-sm-3 col-form-label">Project Group</label>
              <div class="col-sm-8">
                <select class="form-select" aria-label="Default select example"><i class="bi bi-plus-circle-fill"></i>
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Project Name</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword3">
              </div>
            </div>
             <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Project Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Project Color</label>
                <div class="col-sm-9">
                    <input type="color" class="form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                </div>
              </div>
          </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-light text-decoration-none text-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Create</button>
    </div>
    </div>
</div>
</div>
<button type="button" class="bi bi-gear btn btn-primary me-3" data-bs-toggle="button" href=""> Manage System</button>
<button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
</div>

<!-- Page Features-->
<div class="row gx-lg-6">
<!--card Request  -->
<div class="col-lg-4 mb-5">
<div class="card bg-light border-0 h-100">
    <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
        <div style="width:100%;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a href="/requestapprov"><span class="text-white"><strong>Project request approval</strong></a></i></div>
            @foreach ($data as $item)
            <p class=""><img src="img/list.svg"></i>{{ $item->project_name }}<a class="p-3"></a><i class="bi bi-three-dots"></i></p>
            <hr>
                <p class="text-secondary me-auto"style="font-size:13px">from {{ $item->opd_name }}</p> <br>
                    <img src="img/file.svg"/></i></a><img src=" img/pdf.svg"/></i>
                <p class="text-secondary me-auto" style="font-size:13px">20 Desember 2022</p>
                {{-- <p class=""><img src="img/list.svg"></i> {{ $item->project_name }}<a class="p-3"></a><i class="bi bi-three-dots"></i></p>
            <hr>
                <p class="text-secondary me-auto" style="font-size:13px">from {{ $item->opd_name }}<a class="p-2"></a><img src="img/file.svg"/></i></a><img src=" img/pdf.svg"/></i>
                <p class="text-secondary me-auto mb-5" style="font-size:13px">20 Desember 2022</p> --}}
                {{-- <p class="text-secondary me-auto text-center">Full Recap</p> --}}
            @endforeach
        </div>
    </div>
</div>
<!-- card project -->
<div class="col-lg-4 mb-5">
    <div class="card bg-light border-0 h-100">
        <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
            <div style="width:100%;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a href="#"><span class="text-white"><strong>Project</strong></a></i></div>
            <hr>
                <p class=""><img src="img/lingkaran.svg"></i> Projects system atandance<a class="p-3"></a><i class="bi bi-three-dots"></i></p>
                <p class="text-secondary me-auto bi bi-star" style="font-size:13px"></i> in General Project<a class="p-3"></a><img src="img/project1.svg"></i><a class="p-1"></a><img src="img/project2.svg"></i><a class="p-1"></a><img src="img/project3.svg"></i><a class="p-1"></a><img src="img/project4.svg"></i><a class="p-1"></a><img src="img/project5.svg"></i><a class="p-1"></a><img src="img/project6.svg"></i><a class="p-1"></a><img src="img/project1.svg"></i></p>
            <hr>                
                <p class=""><img src="img/lingkaran.svg"></i> Projects system atandance<a class="p-3"></a><i class="bi bi-three-dots"></i></p>
                <p class="text-secondary me-auto bi bi-star" style="font-size:13px"></i> in General Project<a class="p-3"></a><img src="img/project1.svg"></i><a class="p-1"></a><img src="img/project2.svg"></i><a class="p-1"></a><img src="img/project3.svg"></i><a class="p-1"></a><img src="img/project4.svg"></i><a class="p-1"></a><img src="img/project5.svg"></i><a class="p-1"></a><img src="img/project6.svg"></i><a class="p-1"></a><img src="img/project1.svg"></i></p>
            <hr>
                <p class="text-secondary me-auto text-center">View Projects Board</p>
            </div>
        </div>
    </div>
        <!-- Monitoring Project -->
        <div class="col-lg-4 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    <div style="width:100%" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center"><a href="#"><span class="text-white"><strong>Monitoring Project</strong></a></i></div>
                        <p><img src="img/lingkaran.svg"></i> Projects system atandance</p>
                        <hr>
                        <p class="text-secondary me-auto bi bi-star" style="font-size:13px"></i> in General Project</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt aliquet semper augue diam pellentesque vel quis. Eu maecenas sit nulla molestie vestibulum aliquam feugiat gravida eget. Est nec rutrum vitae tincidunt nec sit donec risus mauris. Sit nullam vitae senectus leo leo, dignissim ultrices. Iaculis at orci lorem vitae.</p>
                        <p class="text-secondary me-auto text-center">View Monitoring Project</p>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</div>

<style>
body {
                    
  background-color:#D0D9EE;
      background-size: 160% 140%;
          }
        </style>

</section>
{{-- <!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script> --}}

@endsection