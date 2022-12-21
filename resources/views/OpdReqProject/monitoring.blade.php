@extends('layout.master') @section('content')
<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex" > 
            <span class="h7 text-decoration-none  fw-bold me-2 text-secondary btn btn-" ><i class="bi bi-funnel-fill"  style="color: #57575A;"></i> Filter</span>
            <a class="h7 text-decoration-none fw-bold text-secondary me-auto btn"><img src="images/Foldersearch.svg" style="width: 13%; margin-top: -5%;color: #57575A"> Saved Searches</a>
            <a href="/projectReq_create" class="btn btn-success me-3 border-0" style="background-color:#20B15A;"> Add Request Project</a>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
        </div>
        <div class="row gx-lg-5">
            <div class="col-lg-18 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div style="width: 100%" class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-center"><span class=""><strong>Monitoring</strong></i></div>
                          @foreach ($data as $item)
                          <p class="fs-9 fw- text-start" style="margin-top: 1%; color: #838492;"><img src="images/icon10.svg" style="width: 1%; margin-right : 2%; margin-left: 0%; "><strong>{{ $item['project_name'] }}</strong> </p>
                          <p class="fs-9 fw- text-start" style="margin-top: 1%; color: #838492;"><img src="images/icon5.svg" style="width: 1%; margin-right : 2%; margin-left: 0%; ">in General Project</p>
                          <p class="" style="text-align: justify; margin-left: 3%;">{{ $item->description }}</p>
                          <div class="container">
                            <div class="row">
                              <div class="col-md-4 fw-bold text-start" style="color: #0064AF;margin-left: -1%;">Project Status</div>
                              <div class="col-md-4 offset-md-4 "><div class="progress-bar bg-success fs-9 fw-" role="progressbar" style="width: 80%; margin-left: 30%; margin-top: 2%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                 <div class="progress " role="progressbar" style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;" aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                              </div></div>
                            </div>
                            @endforeach
                            
                        </div> <hr class="" style="width:110%; margin-left: -5%;">     
                        <p class="fs-9 fw-bold text-start "><p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i class="bi bi-three-dots-vertical"style="margin-right: 1%"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>2/3 <mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 20</mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet, consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>          
                                <hr class="" style="width:102%; margin-left: -1%;">  
                                <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical"style="margin-right: 1%"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>2/4 <mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 20 </mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet, consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>   
                   
                    </div>
                         </section>
                         @endsection