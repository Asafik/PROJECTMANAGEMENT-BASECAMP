@extends('layout.masterReq') @section('content')
</header>
<!-- Page Content-->
<section class="pt-3">
  <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex" > 
          
          <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-funnel-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
          </a>

          
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
          <a class="h7 text-decoration-none fw-bold text-secondary me-auto btn"><img src="images/Foldersearch.svg" style="width: 13%; margin-top: -5%;color: #57575A"> Saved Searches</a>
          <button class="btn btn-success me-3 " style="background-color:#20B15A"><i class="bi bi-plus-circle-fill"></i> Add Request Project</button>
          <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear-fill" style="color: #838492;"></i></a>
      </div>
        <div class="row gx-lg-5">
            <div class="col-lg-18 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start"><span class=""><img src="images/checklist.svg" alt="" width="20" height="25" style="margin-left: -23%;"><a href="https://dewaayusuri.github.io/requestsuccessfull.github.io/" style="color: #fff; text-decoration: double; margin-left: -22%;"></a><strong>Request Project</strong></i></div>
                            <div class="row">
                                <div class="col-sm-6">
                                  <div class="card" style="border-color: #fff">
                                    <div class="card-body rounded-3" style="background: #E2E4FA; border-style:groove; ;" >
                                      
                                      <p class="card-text" style="font-size:xx-small ; text-align: justify; margin-left: 10% ;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo donec non posuere aliquam. Tempor rhoncus vehicula dignissim elit nunc, a eu risus. Orci viverra platea luctus non ultrices sed adipiscing at donec.</p>
                                     
                                    </div>
                                  </div>
                                 <p class="" style="margin-top: 2%;"><strong>Panduan Request Project</strong></p>
                                 <div class="row">
                                  <div class="col-sm-6">
                                    <div class="card" style="border-color: #fff; margin-left: -5%;margin-right: -5%;">
                                      <div class="card-body" >
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"><input class="form-control form-control-lg " type="text" placeholder="Project Name :" aria-label=".form-control-lg example"></p>
                                       
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="card" style=" border-color: #fff; margin-right: -5%; margin-left: -5%;">
                                      <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"><select class="form-select form-select-lg" aria-label=".form-select-lg example"s>
                                          <option selected>Project Type</option>
                                          <option value="1">Website</option>
                                          <option value="2">Application</option>
                                          <option value="3">Network</option>
                                        </select>
                                      </p>
                                       
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3 " style="margin-top: -1%;margin-bottom: -1%;">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Description :"></textarea>
                                  </div>
                                </div>
                                </div>
                                
                                <div class="col-sm-6">
                                  <div class="card" style="border-color: #fff;">
                                    <div class="card-body rounded-3" style="background: #E2E4FA;border-style:groove;">
                                      
                                      <p class="card-text" style="font-size:xx-small; text-align: justify; margin-left: 10%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo donec non posuere aliquam. Tempor rhoncus vehicula dignissim elit nunc, a eu risus. Orci viverra platea luctus non ultrices sed adipiscing at donec.</p>
                                     
                                    </div>
                                    
                                  </div>
                                  <p class="" style="margin-top: 2%;"><strong>Syarat dan Ketentuan</strong></p> 
                                  <div class="card"  style="border-color: #fff; margin-left: -4%; margin-right: -3%;">
                      
                                    <div class="card-body">
                                      <h5 class="card-title"></h5>
                                      <p class="card-text"><select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>OPD Name </option>
                                        <option value="1">Dinas Informasi, Komunikasi dan Informatika</option>
                                        <option value="2">Dinas Lingkungan Hidup</option>
                                        <option value="3">Dinas Priwisata</option>
                                      </select></p>
                                      <div class="card text-center btn" style="margin-top: 7%;border-color: #0064AF; margin-bottom:2% ;">
                                        <div class="card-body" >
                                          <h5 class="card-title"><i class="bi bi-download " style="font-size: 50px;color: #0064AF;"></i></h5>
                                          <p class="card-text" style="margin-top: 2%;"><img src="images/pdf.svg" style="width: 4%;"><img src="images/filep.svg" style="width: 4%;margin-left: 2%;"><img src="images/gdrive.svg" style="width: 5%;margin-left: 2%;"><img src="images/addfile.svg" style="width: 5%;margin-left: 2%;"></p>
                                          <input type="file" class="form-control" id="inputGroupFile01" style="margin-top: 4%; width: 70%; margin-left: 20%;">
                                        </div>
                                        
                                      </div>
                                      <div class="d-grid gap-2 col-11 mx-auto"> <a href="/projectReqSuccess">
                                        <button class="btn btn-primary" type="button" style="width: 108%;  margin-left: -3%;">Send Your Request</button>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
  </div>       
</section>
    
@endsection