@extends('layout.master') @section('content')
<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-3 d-flex">
            </div>
               <!-- card  Project System Atandance/Analyst and Dokumentasi -->
            <div class="col-lg-12 mb-3">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-8 p-lg-3 pt-0 pt-lg-0">
                        <div style="width:100%;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-center text-white"><a href=""><span class="text-white"><img src="img/logorequest.svg" height="30" width="30"><strong> Request Project Approval</strong></a></i></div>
                            <div class="row" style="margin-bottom: 10%; margin-bottom: 4%;">
                                <div class="col-sm-2">
                                  <div class="card">
                                    <div class="card-body" style="border-top: 50%; margin-bottom: 138%;">
                                      <h5 class="card-title">20 Desember 2022</h5>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-7">
                                  <div class="card">
                                    <div class="card-body" style="border-top: 50%; margin-bottom: 29%;">
                                      @foreach ($data as $item)
                                      <h5 class="card-title">{{ $item->project_name }}</h5>
                                      <p class="card-text fs--2">{{ $item->description }}</p>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                      <div class="card-body" style="border-top: 50%; margin-bottom: 43%;">
                                        <h5 class="card-title mb-5">Pelajari :</h5>
                                        <p class="card-text text-center"><img src="img/pdfrequest.svg" height="50" width="50"/></p>
                                        <p class="card-text text-center"><img src="img/pdfrequest.svg" height="50" width="50"/></p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                               <!-- Page Content-->
                              <section class="pt-3">
                                <div class="container px-lg-0">
                               <!-- Page Features-->
                              <div class="row mb-3">
                                <div class="col-lg-12 mb-3 d-flex" style="margin-left: -1%;">
                                        <button type="button" class="btn btn-secondary disabled col-4 me-2" data-bs-toggle="button" href=""> Reject</button>
                                        <button type="button" class="btn btn-secondary disabled col-4 me-2" data-bs-toggle="button" href=""> Revisi</button>
                                        <div class="btn btn-success btn col-4 me-2"><a href="/requestapprovsucess"><span class="text-white"><strong>Accept</strong></a></i></div>
                                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</section>
@endsection
