@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
<div class="container px-lg-0">
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-8 mb-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <br>
            <div class="card bg-light border-0">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                  <form action="/update/{{ Auth::user()->id }}" method="POST">
                    @csrf
                    <div style="width:100%" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start text-center">
                        <span class="text-white">
                        <strong>User Profile & Setting</strong>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-2 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input class="form-control" aria-label=".form-control-lg example" type="text" value="{{ Auth::user()->name }}" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="email" class="col-2 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input class="form-control" aria-label=".form-control-lg example" type="text" value="{{ Auth::user()->email }}" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="phone" class="col-2 col-form-label">Phone</label>
                        <div class="col-sm-9">
                          <input class="form-control" aria-label=".form-control-lg example" type="text" value="{{ Auth::user()->phone }}" name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="password" class="col-2 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input class="form-control" aria-label=".form-control-lg example" type="password" value="{{ Auth::user()->password }}" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="nik" class="col-2 col-form-label">NIK</label>
                        <div class="col-sm-9">
                          <input class="form-control" aria-label=".form-control-lg example" type="text" value="{{ Auth::user()->nik }}" name="nik" id="nik" required>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg fw-bold justify-content-center" type="submit" style="width: 100%; margin-top: 2%; background-color: #0064AF;"><span style="color: #fff;">Update</button>
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
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection