@extends('layout.masterReq') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
          <!-- Page Features-->
          <div class="col-lg-12 mb-5 d-flex" > 
            <span class="h7 text-decoration-none  fw-bold me-2 text-secondary btn btn-" ><i class="bi bi-funnel-fill"  style="color: #57575A;"></i> Filter</span>
            <a class="h7 text-decoration-none fw-bold text-secondary me-auto btn"><img src="images/Foldersearch.svg" style="width: 13%; margin-top: -5%;color: #57575A"> Saved Searches</a>
            <button class="btn btn-success me-3 " style="background-color:#20B15A"><i class="bi bi-plus-circle-fill"></i> Add Request Project</button>
            <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear-fill"style="color: #838492;"></i></a>
        </div>
          <div class="row gx-lg-5">
              <div class="col-lg-18 col-xxl-4 mb-5">
                  <div class="card bg-light border-0 h-100">
                      <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                          <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start"><span class=""><img src="images/checklist.svg" alt="" width="20" height="25" style="margin-left: -23%;"><a href="https://dewaayusuri.github.io/requestsuccessfull.github.io/" style="color: #fff; text-decoration: double; margin-left: -22%;"></a><strong>Request Project</strong></i></div>
                            <div class="card text-center" style="width: 50%; ;background-color: #D0D9EE; margin-left: 25%; margin-top: 10%; color: #57575A; border-color: #fff;">
                              <div class="card-body"  >
                                <strong>Successfully Request Your Project</strong>
                              </div>
                              
                            </div>
                            <a href="/projectReq"><button type="button" class="btn btn-light" style="margin-top:4%; background-color: #20B15A;margin-bottom: 10%;"><a href="/projectReq" style="color: #20B15A;"><span class="" style="color: #fff">back to home >></a></button>
             
  </section>
  
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

@endsection