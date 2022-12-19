@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
          <!-- Page Features-->
          <div class="row gx-lg-5">
              <div class="col-lg-18 mb-5">
                  <div class="card bg-light border-0 h-100">
                      <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-center" style="width:100%;"></a><strong>Request Project</strong></i></div>
                          @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                          @endif
                        <button type="button" class="btn btn-light btn-lg" style="margin-top:4%; background-color: #20B15A;"><a href="/projectReq" style="color: #20B15A;"><span class="" style="color: #fff">Back to Request Project
                        </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </section>
@endsection