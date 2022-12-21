@extends('layout.master') @section('content')

<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex"> 
            <span class="h5 text-decoration-none text-black fw-bold me-2">Hello, {{ auth()->user()->name }}!</span>
            <a class="h5 text-decoration-none text-secondary me-auto">Stay Healthy.</a>
            <a href="/projectReq_create" class="btn btn-success me-3 border-0" style="background-color:#20B15A;"> Add Request Project</a>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
        </div>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-0">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-lg-4 pt-0 pt-lg-0">
                            <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start"><strong>Panduan Request Project</strong></a></i></div>
                            <p class="fs-9 fw-bold text-start "><img src="images/requestprojecticon.svg" style="width: 5%; margin-right : 5%;">Panduan Request Project</p><img src="images/line.svg" style="width: 112%; margin-top:-10%;margin-left: -6%">
                            <p class="mb-0 text-start" style="9%;color: #83838A">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum laoreet eu morbi venenatis egestas sed. Integer non, non massa arcu ullamcorper pellentesque volutpat. Et eget cursus erat in vitae accumsan leo pharetra dolor.</p><br>
                            <p class="fs-9 fw-bold text-start "><img src="images/syaratdanketentuan.svg" style="width: 7%; margin-right : 5%;">Syarat dan Ketentuan</p><img src="images/line.svg" style="width: 112%; margin-top:-10%;margin-left: -6%">
                            <p class="mb-0 text-start" style="9%;color: #83838A">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum laoreet eu morbi venenatis egestas sed. Integer non, non massa arcu ullamcorper pellentesque volutpat. Et eget cursus erat in vitae accumsan leo pharetra dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-lg-4 pt-0 pt-lg-0">
                            <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start"><strong>Request Project</strong></i></div>
                            @foreach ($data as $item)
                            <p class="fs-9 fw-bold text-start"><img src="images/icon.svg" style="width: 7%; margin-right : 4%;">{{ $item['project_name'] }}</p><img src="images/line.svg" style="width: 112%; margin-top:-10%;margin-left: -6%">
                            <p class="fs-9 fw- text-start" style="margin-top: -5%; color: #83838A;">{{ $item['description'] }}</p>
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-start" style="color: #0064AF;margin-top: -5%;">{{ $item['project_type'] }}</p>
                                </div>
                                <div class="col-4">
                                    <p class="text-start" style="color: #0064AF;margin-top: -5%; margin-left:-30%">{{ $item['opd_name'] }}</p>
                                </div>
                                <div class="col-4">
                                    <a href="/projectReq_details/{{ $item->id }}"><p class="text-center" style="color: #0064AF;margin-top: -5%; ">See Details</p></a>
                                </div>
                            </div><br>
                            <a href="/projectReq_all" style="color: #838492"><p class="text-center">More project request</p></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-lg-4 pt-0 pt-lg-0">
                            <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start"><span class=""><span class="" style="color: #fff;"><strong>Monitoring Project</strong></i></div>
                                @foreach ($data as $item)
                                <p class="fs-9  text-start"><img src="images/icon4.svg" style="width: 4%; margin-right : 5%;">{{ $item->project_name }} </p><img src="images/line.svg" style="width: 112%; margin-top:-10%; margin-left: -6%">
                                <p class="fs-9 fw- text-start" style="margin-top: -5%; color: #838492;"><img src="images/icon5.svg" style="width: 5%; margin-right : 5%; ">in General Project</p>
                                <p class="mb-0 text-start" style="9%;color: #83838A;">{{ $item->description }} </p> <br>
                                <a href="/monitoring" style="color: #838492;"><p class="text-center" style="color: #838492;">View Monitoring Project</p></a>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection