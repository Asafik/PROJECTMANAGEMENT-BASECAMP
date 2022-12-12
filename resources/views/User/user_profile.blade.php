@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
<div class="container px-lg-0">
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-8 mb-5">
            <div class="card bg-light border-0">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                  <form action="" method="post">
                    @csrf
                    <div style="width:715px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start text-center">
                        <a href="#"><span class="text-white">
                            <strong>User Profile & Setting</strong>
                        </a>
                    </div>
                    <div class="row mb-2">
                        <label for="inputPassword3" class="col-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                          <input type="text" name="project_grups_id" class="form-control" id="name" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputPassword3" class="col-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" name="project_grups_id" class="form-control" id="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputPassword3" class="col-2 col-form-label">Phone</label>
                        <div class="col-sm-8">
                          <input type="text" name="project_grups_id" class="form-control" id="phone" aria-describedby="emailHelp" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputPassword3" class="col-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="project_grups_id" class="form-control" id="password" aria-describedby="emailHelp" value="{{ Auth::user()->password }}">
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="inputPassword3" class="col-2 col-form-label">NIK</label>
                        <div class="col-sm-8">
                          <input type="text" name="project_grups_id" class="form-control" id="nik" aria-describedby="emailHelp" value="{{ Auth::user()->nik }}">
                        </div>
                        <div class="col-sm-2">
                          <button type="button" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    <img src="images/fotoprofil.svg" class="btn" style="margin-left: 20%; margin-top: -10%;">
                    <h3 class="text-center">{{ auth()->user()->name }}</h3>
                    <p class="text-center">{{ auth()->user()->email }}</p>
                    {{-- <p class="mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    {{-- <div class="container text-center">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <a href="#!">
                                    <img src="images/twitter.svg" alt="" width="50" height="24" style="margin-left: 100%;">
                                </a>
                            </div>
                            <div class="col-sm">
                                <p>agus123</p>
                            </div>
                        <div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <a href="#!">
                                    <img src="images/instagram.svg" alt="" width="50" height="24" style="margin-left: 100%;">
                                </a>
                            </div>
                            <div class="col-sm">
                                <p>agus123</p>
                            </div>
                        <div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <a href="#!">
                                    <img src="images/facebookk.svg" alt="" width="50" height="24" style="margin-left: 100%;">
                                </a>
                            </div>
                            <div class="col-sm">
                                <p>agus123</p>
                            </div>
                        <div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</section>
@endsection