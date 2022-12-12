@extends('layout.master') @section('content')

<!-- Header-->
<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <!-- popover saved searches & group by -->
        <div class="col-lg-12 mb-5 d-flex">
            <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="bi bi-funnel-fill" style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
            </a>
            <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="bi bi-folder-fill" style="color: #57575A;"></i><strong style="color: #57575A;">Saved
                    Searches</strong>
            </a>
            <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">
                <i class="bi bi-stack" style="color: #57575A;"></i><strong style="color: #57575A;">Group By</strong>
            </a>
            <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Add Item</button>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill"
                    style="color: #838492;"></i></button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"
                            style="color: #57575A;"></i>&nbsp Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <hr style="margin-top: -4%;">
                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                        images, lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown">
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
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <hr style="border-color:black;">
            <div class="offcanvas-body">
                <form>
                    <div class="row mb-2">
                        <label for="inputProjectGroup" class="col-sm-3 col-form-label fs-7">Search Text</label>
                        <div class="col-sm-9">
                            <select class="form-select" aria-label="Default select example"><i
                                    class="bi bi-plus-circle-fill"></i>
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
                </form>
            </div>
        </div>

        <!-- Page Content-->

        <section>
            <div class="container px-lg-0">

                <!-- Page Features-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-10 ms-auto">
                            <div class="col-md-4 offset-md-8 ">
                                <div class="progress-bar bg-success fs-9 fw-" role="progressbar"
                                    style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress " role="progressbar"
                                            style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;"
                                            aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-lg-5">
                    <div class="col-lg-15 col-xxl-4 mb-5">
                        <!--Ganti Ukuran-->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n4 text-start">
                                    <strong>Project System Attendance / Analyst and Documentation</strong></i></div>
                                <p class="fs-9 fw-bold text-start ">
                                <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s>2/3 <mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may 9
                                    </mark><button type="button" class="btn btn-warning btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                        class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s><mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may 9
                                    </mark><button type="button" class="btn btn-danger btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                        &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s><mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may
                                        20</mark><button type="button" class="btn btn-danger btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                        &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"
                                        style="margin-left: -18%;margin-right: -18%;"><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                                    consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                                        src="images/fotoprofilgroup.svg" class="btn" height="50"
                                        style="margin-left: -18%;margin-right: -18%;"></button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                                <hr class="" style="width:102%; margin-left: -1%;">
                                <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s>2/4 <mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may 9
                                    </mark><button type="button" class="btn btn-warning btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                        class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;"></a>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s><mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may 9
                                    </mark><button type="button" class="btn btn-danger btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                        &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;"></a>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                        consectetur adipiscing elit. </s><mark
                                        style="background-color: #D0D9EE; color: #838492;">completed may 20
                                    </mark><button type="button" class="btn btn-danger btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                        &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"
                                        style="margin-left: -18%;margin-right: -18%;"></button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                                    consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                                        src="images/fotoprofilgroup.svg" class="btn" height="50"
                                        style="margin-left: -18%;margin-right: -18%;"></button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                        class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                                    consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                                        src="images/fotoprofilgroup.svg" class="btn" height="50"
                                        style="margin-left: -18%;margin-right: -18%;"></button><mark
                                        style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                        class="bi bi-chat-left btn" href="discussopd.html"
                                        style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 ms-auto">
                    <div class="col-md-4 offset-md-8 ">
                        <div class="progress-bar bg-success fs-9 fw-" role="progressbar"
                            style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress " role="progressbar"
                                    style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;"
                                    aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-15 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start">
                            <a href="#">
                                <span class="" style="color: #fff;">
                                    <strong>Project System Attendance/UI/UX Design</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row gx-lg-5">
        <div class="col-lg-15 col-xxl-4 mb-5">
            <!--Ganti Ukuran-->
            <div class="card bg-light border-0 h-100">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n4 text-start">
                        <strong>Project System Attendance / Analyst and Documentation</strong></i>
                    </div>
                    <p class="fs-9 fw-bold text-start ">
                    <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i class="bi bi-check-circle"
                            style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s>2/3 <mark
                            style="background-color: #D0D9EE; color: #838492;">completed may 9
                        </mark><button type="button" class="btn btn-warning btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                            class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn"
                            href="discussopd.html" style="color: #A3A4A7; margin-left: -1%;"></a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s><mark
                            style="background-color: #D0D9EE; color: #838492;">completed may 9
                        </mark><button type="button" class="btn btn-danger btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                            &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;"></a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s><mark
                            style="background-color: #D0D9EE; color: #838492;">completed may
                            20</mark><button type="button" class="btn btn-danger btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                            &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                            class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                        consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                            src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                            class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                    <hr class="" style="width:102%; margin-left: -1%;">
                    <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i class="bi bi-check-circle"
                            style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s>2/4 <mark
                            style="background-color: #D0D9EE; color: #838492;">completed may 9
                        </mark><button type="button" class="btn btn-warning btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                            class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn"
                            href="discussopd.html" style="color: #A3A4A7; margin-left: -1%;"></a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s><mark
                            style="background-color: #D0D9EE; color: #838492;">completed may 9
                        </mark><button type="button" class="btn btn-danger btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                            &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;"></a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                            consectetur adipiscing elit. </s><mark
                            style="background-color: #D0D9EE; color: #838492;">completed may 20
                        </mark><button type="button" class="btn btn-danger btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                            &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                            class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                        consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                            src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                            class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                    <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                            class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                            class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                            class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet,
                        consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                            style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img
                            src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark
                            style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                        </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                            class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                            class="bi bi-chat-left btn" href="discussopd.html"
                            style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 ms-auto">
        <div class="col-md-4 offset-md-8 ">
            <div class="progress-bar bg-success fs-9 fw-" role="progressbar"
                style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress " role="progressbar"
                        style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;"
                        aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-15 col-xxl-4 mb-5">
        <div class="card bg-light border-0 h-100">
            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div class="btn bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 text-start">
                    <a href="#">
                        <span class="" style="color: #fff;">
                            <strong>Project System Attendance/UI/UX Design</strong>
                    </a>
                </div>
                <p class="fs-9 fw-bold text-start ">
                <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%">
                    <i class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i>
                    <i class="bi bi-three-dots-vertical" style="margin-right: 1%"></i>
                    <i class="bi bi-check-circle" style="color:#149347"></i>
                    <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>2/3
                    <mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark>
                    <button type="button" class="btn btn-warning btn-sm"
                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button>
                    <mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark>
                    <mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark>
                    <i class="bi bi-flag-fill btn" style="color : #3766DF"></i>
                    <a class="bi bi-chat-left btn" href="discussopd.html" style="color: #A3A4A7; margin-left: -1%;"></a>
                </p>
                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%">
                    <i class="bi bi-three-dots-vertical" style="margin-right:-2%"></i>
                    <i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i>
                    <i class="bi bi-check-circle" style="color:#149347"></i>
                    <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>
                    <mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark>
                    <button type="button" class="btn btn-danger btn-sm"
                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                        &nbsp</button>
                    <i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i>
                    <mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark>
                    <mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp
                    <a class="bi bi-chat-left btn" href="discussopd.html" style="color: #A3A4A7; margin-left: -1%;"></a>
                </p>
                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%">
                    <i class="bi bi-three-dots-vertical" style="margin-right:-2%"></i>
                    <i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i>
                    <i class="bi bi-check-circle" style="color:#149347"></i>
                    <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>
                    <mark style="background-color: #D0D9EE; color: #838492;">completed may 20</mark>
                    <button type="button" class="btn btn-danger btn-sm"
                        style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                        &nbsp</button>
                    <img src="images/fotoprofilgroup.svg" class="btn" height="50">
                    <mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                        style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                        class="bi bi-chat-left btn" href="discussopd.html"
                        style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a>
                </p>
                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                        class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                        class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle"
                        style="color:#FEA21F"></i> ipsum dolor sit amet, consectetur
                    adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                        style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button>
                    <img src="images/fotoprofilgroup.svg" class="btn" height="50">
                    </button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                    </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                        class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                        class="bi bi-chat-left btn" href="discussopd.html"
                        style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a>
                </p>
            </div>
        </div>
    </div>

</section>
@endsection