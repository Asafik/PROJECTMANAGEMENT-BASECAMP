@extends('layout.master') @section('content')
</header>
<!-- Page Content-->
<section class="pt-3">
  <div class="container px-lg-0">
    <!-- Page Features-->
    <div class="col-lg-12 mb-5 d-flex">
      <div class="row gx-lg-5">
        <div class="col-lg-18 mb-5">
          <div class="card border-0 h-100">
            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
              <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-center" style="width:100%;">
                <strong>Request Project</strong>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="card" style="border-color: #fff;">
                    <div class="card-body rounded-3" style="background: #E2E4FA;border-style:groove;">
                      <p class="card-text" style="font-size:xx-small; text-align: justify; margin-left: 10%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo donec non posuere aliquam. Tempor rhoncus vehicula dignissim elit nunc, a eu risus. Orci viverra platea luctus non ultrices sed adipiscing at donec.
                      </p>
                    </div>
                  </div>
                  <p style="margin-top: 2%;"><strong>Panduan Request Project</strong></p>
                </div> {{--tutup col pertama --}}
                <div class="col-sm-6">
                  <div class="card" style="border-color: #fff;">
                    <div class="card-body rounded-3" style="background: #E2E4FA;border-style:groove;">
                      <p class="card-text" style="font-size:xx-small; text-align: justify; margin-left: 10%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo donec non posuere aliquam. Tempor rhoncus vehicula dignissim elit nunc, a eu risus. Orci viverra platea luctus non ultrices sed adipiscing at donec.
                      </p>
                    </div>
                  </div>
                  <p style="margin-top: 2%;"><strong>Syarat dan Ketentuan</strong></p>
                </div>

                  <form action="/projectReq_store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-floating">
                          <input class="form-control form-control-lg @error('project_name') is-invalid @enderror" type="text" placeholder="project name" aria-label=".form-control-lg example" name="project_name" id="floatingTextarea" required value="{{ old('project_name') }}">
                          <label for="floatingTextarea">Project Name</label>
                          @error('project_name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-floating">
                          <input class="form-control form-control-lg @error('project_type') is-invalid @enderror" type="project_type" placeholder="project type" aria-label=".form-control-lg example" name="project_type" id="floatingTextarea" required value="{{ old('project_type') }}">
                          <label for="floatingTextarea">Project Type</label>
                          @error('project_type')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-floating">
                          <input class="form-control form-control-lg @error('opd_name') is-invalid @enderror" type="opd_name" placeholder="OPD Name" aria-label=".form-control-lg example" name="opd_name" id="floatingTextarea" required value="{{ old('opd_name') }}">
                          <label for="floatingTextarea">OPD Name</label>
                          @error('opd_name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-floating">
                          <textarea style="margin-top: 7%; margin-bottom: 3%; height: 203px;" class="form-control form-control-lg @error('description') is-invalid @enderror" type="text" placeholder="description" aria-label=".form-control-lg example" name="description" id="floatingTextarea" required value="{{ old('description') }}"></textarea>
                          <label for="floatingTextarea">Project Description</label>
                          @error('description')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="card text-center btn" style="margin-top: 7%;border-color: #0064AF; margin-bottom:2% ;">
                          <div class="card-body" >
                            <h5 class="card-title"><i class="bi bi-download " style="font-size: 50px;color: #0064AF;"></i></h5>
                            <p class="card-text" style="margin-top: 2%;"><img src="images/pdf.svg" style="width: 4%;"><img src="images/filep.svg" style="width: 4%;margin-left: 2%;"><img src="images/gdrive.svg" style="width: 5%;margin-left: 2%;"><img src="images/addfile.svg" style="width: 5%;margin-left: 2%;"></p>
                            <input type="file" class="form-control @error('project_files') is-invalid @enderror" id="inputGroupFile01" name="project_files" style="margin-top: 4%; width: 70%; margin-left: 20%;" required value="{{ old('project_files') }}">
                            @error('project_files')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      
                     </div> {{--tutup row dalam form --}}
                    <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;"><span style="color: #fff;">Send Your Request</button>
                    </form>
               </div> {{--tutup row --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection