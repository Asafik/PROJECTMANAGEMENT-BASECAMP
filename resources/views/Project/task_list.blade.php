@extends('layout.masterProject') @section('content')

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
                data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Add List</button>
            <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal"
                data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle"></i> Add Task</button>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff" data-bs-toggle="modal"
                data-bs-target="#exampleModalsetting"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>

            <!-- modal filter -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"
                            style="color: #57575A;"></i>&nbsp Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container">
                        <form action="" method="" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="searchtext" class="col-sm-4 col-form-label">Search Text</label>
                                <div class="col-sm-8">
                                    <input type="searchtext" class="form-control" id="searchtext">
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Sort By</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Project Group</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Project </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Created By</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Assigned To</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Priority</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Due Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Date Created</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Date Updated</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Date Completed</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Milestone Linked</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>Select</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light me-auto btn" data-bs-dismiss="offcanvas"
                                    aria-label="Close"><strong style="color: gray;">Cancel</strong></button>
                                <a href="#" class="btn btn-success me-auto btn">
                                    <i class="bi bi-funnel-fill" style="color: white"></i><strong
                                        style="color: white;">Apply</strong>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add List -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal">Add List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="/storetask" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title </label>
                                    <input type="text" name="tile" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <textarea type="text" name="list_description" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
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

    <!-- modal setting -->
    <div class="modal fade" id="exampleModalsetting" tabindex="-1" aria-labelledby="exampleModalsetting"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalsetting">setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="/storetask" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <i class="bi bi-plus-circle"></i>
                                <label for="exampleInputEmail1" class="form-label">Add Task </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-pencil-fill"></i>
                                <label for="exampleInputEmail1" class="form-label">Edit List </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-archive-fill"></i>
                                <label for="exampleInputEmail1" class="form-label">Archive List </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-list-task"></i>
                                <label for="exampleInputEmail1" class="form-label">Manage List </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-files"></i>
                                <label for="exampleInputEmail1" class="form-label">Copy/Move </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-arrow-left-right"></i>
                                <label for="exampleInputEmail1" class="form-label">Shift Deadlines </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-arrows-angle-expand"></i>
                                <label for="exampleInputEmail1" class="form-label">Collapse | Expand Subtask</label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-stopwatch"></i>
                                <label for="exampleInputEmail1" class="form-label">Task Counts Show | Hide </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-dash-circle-fill"></i>
                                <label for="exampleInputEmail1" class="form-label">Delete Completed Task </label>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-trash-fill"></i>
                                <label for="exampleInputEmail1" class="form-label">Delete List </label>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                        aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-lg-5">
                <div class="col-lg-15 col-xxl-4 mb-3">
                    <!--Ganti Ukuran-->
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                            <div style="width:100%;"
                                class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n3 text-center">
                                <strong>Project System Attendance / Analyst and Documentation</strong></i>
                            </div>
                            <p class="fs-9 fw-bold text-start ">
                            <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s>2/3 <mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-warning btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                    class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>

                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 20</mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
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
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                    class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                            <hr class="" style="width:102%; margin-left: -1%;">
                            <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s>2/4 <mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-warning btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                    class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 20 </mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn"
                                    height="50"></button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
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
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                    class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>

                        </div>
                    </div>
                </div>
                <a class="h6 text-decoration-none text-success mb-5" href="" data-bs-toggle="modal"
                    data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
                <!--modal add task-->
                <div class="modal fade" id="exampleModalAddtask" tabindex="-1" aria-labelledby="exampleModalAddtask"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalAddtask">Add Task</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="/store" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Task
                                                    List</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="#" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword3"
                                                    class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title_task" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">Description</label>
                                                <textarea type="text" name="description_task" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="inputEmail4" class="form-label">Assigned To</label>
                                                    <select name="status" class="form-control">
                                                        <option value="">User 1</option>
                                                        <option value="">User 2</option>
                                                        <option value="">User 3</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" placeholder="Start Date"
                                                        aria-label="Start Date">
                                                </div>
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">Due Date</label>
                                                    <input type="date" class="form-control" placeholder="Due Date"
                                                        aria-label="Due Date">
                                                </div>
                                                <div class="col">
                                                    <label for="inputEmail4" class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="">No Progress</option>
                                                        <option value="">In Progres</option>
                                                        <option value="">Complate</option>
                                                    </select>
                                                </div>
                                                <div class="row mb-3 mt-3">
                                                    <div class="col">
                                                        <label for="exampleInputText1"
                                                            class="form-label">Priority</label>
                                                        <select name="status" class="form-control">
                                                            <option value="">No Progress</option>
                                                            <option value="">In Progres</option>
                                                            <option value="">Complate</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="exampleInputText1"
                                                            class="form-label">Milestone</label>
                                                        <select name="status" class="form-control">
                                                            <option value="">Project System Attendance</option>
                                                            <option value="">Project System Attendance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-2 row mt-1">
                                                    <label for="Notivications"
                                                        class="col-sm-3 col-form-label">Notifications</label>
                                                    <div class="col-sm-8 align-self-center">
                                                        <i class="bi-person"> No followers</i>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row mt-1">
                                                    <i class="bi bi-link-45deg"> Attached File</i>
                                                </div>
                                            </div>
                                    </div>
                                  
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create and Add Another</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                              </div>
                        </form>
                      </div>
                      
                     
                      {{-- <div class="col-md-4"></div>
                      <div class="col-md-10 ms-auto"> <div class="col-md-4 offset-md-8 "><div class="progress-bar bg-success fs-9 fw-" role="progressbar" style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                         <div class="progress-bar" role="progressbar" style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;" aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                       </div></div></div></div> </div>
                    </div> --}}
                    <!-- kedua -->
                    <div class="container">
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-10 ms-auto"> <div class="col-md-4 offset-md-8 "><div class="progress-bar bg-success fs-9 fw-" role="progressbar" style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                         <div class="progress " role="progressbar" style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;" aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                       </div></div></div></div> </div>
                    </div>
                    <div class="row gx-lg-5">
                    <div class="col-lg-15 mb-3"> <!--Ganti Ukuran-->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                                <div style="width:100%;" class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n3 text-center"><strong>Project System Attendance / Analyst and Documentation</strong></i></div>
                                <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical"style="margin-right: 1%"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s>2/4 <mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;"></a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet, consectetur adipiscing elit. </s><mark style="background-color: #D0D9EE; color: #838492;">completed may 20 </mark><button type="button" class="btn btn-danger btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a></p>
                                <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i class="bi bi-three-dots-vertical"style="margin-right:-2%"></i><i class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet, consectetur adipiscing elit.<button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><img src="images/fotoprofilgroup.svg" class="btn" height="50"></button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>   
                                 
                            </div>
                          </div>
                      </div>
                        <a class="h6 text-decoration-none text-success mb-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
                    </div>
                
                        <!--modal add task-->
                        <div class="modal fade" id="exampleModalAddtask" tabindex="-1" aria-labelledby="exampleModalAddtask"   aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalAddtask">Add Task</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                <form action="/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                  <div class="modal-body">
                                    <div class="container">
                                      <form action="/store" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                          <label for="inputPassword3" class="col-sm-3 col-form-label">Task List</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                           </div>
                                          </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="title_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputText1" class="form-label">Description</label>
                                            <textarea type="text" name="description_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                          </div>
                                          <div class="row">
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Assigned To</label>
                                              <select name="status" class="form-control">
                                                <option value="">User 1</option>
                                                <option value="">User 2</option>
                                                <option value="">User 3</option>
                                              </select>
                                            </div>
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Start Date</label>
                                              <input type="date" class="form-control" placeholder="Start Date" aria-label="Start Date">
                                            </div>
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Due Date</label>
                                              <input type="date" class="form-control" placeholder="Due Date" aria-label="Due Date">
                                            </div>
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Status</label>
                                              <select name="status" class="form-control">
                                                <option value="">No Progress</option>
                                                <option value="">In Progres</option>
                                                <option value="">Complate</option>
                                              </select>
                                            </div>
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Priority</label>
                                              <select name="priority" class="form-control">
                                                <option value="">none</option>
                                                <option value="">low</option>
                                                <option value="">medium</option>
                                                <option value="">high</option>
                                              </select>
                                            </div>
                                          </div> 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Create and Add Another</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>


                    <div class="col-md-4"></div>
                    <div class="col-md-10 ms-auto">
                        <div class="col-md-4 offset-md-8 ">
                            <div class="progress-bar bg-success fs-9 fw-" role="progressbar"
                                style="width: 60%; margin-left: 30%; margin-bottom: 10% ;" aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 30%; background-color:#838492; margin-top: -10%; margin-right: 10%;"
                                        aria-valuenow="30" height="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- kedua -->
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
                <div class="col-lg-15 col-xxl-4 mb-3">
                    <!--Ganti Ukuran-->
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                            <div style="width:1100px;"
                                class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n3 text-start">
                                <strong>Project System Attendance / Analyst and Documentation</strong></i>
                            </div>
                            <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s>2/4 <mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-warning btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                    class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 9 </mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><i class="bi bi-person-circle btn fst-normal"> &nbspabcd</i><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 17</mark>&nbsp<a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                            <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                    class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                    class="bi bi-check-circle" style="color:#149347"></i> <s>ipsum dolor sit amet,
                                    consectetur adipiscing elit. </s><mark
                                    style="background-color: #D0D9EE; color: #838492;">completed may 20 </mark><button
                                    type="button" class="btn btn-danger btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">&nbsp &nbsp high &nbsp
                                    &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn"
                                    height="50"></button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
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
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                    class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>

                        </div>
                    </div>
                </div>
                <a class="h6 text-decoration-none text-success mb-5" href="" data-bs-toggle="modal"
                    data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
            </div>

            <!--modal add task-->
            <div class="modal fade" id="exampleModalAddtask" tabindex="-1" aria-labelledby="exampleModalAddtask"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalAddtask">Add Task</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="container">
                                    <form action="/store" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Task
                                                List</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="#" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="title_task" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputText1" class="form-label">Description</label>
                                            <textarea type="text" name="description_task" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Assigned To</label>
                                                <select name="status" class="form-control">
                                                    <option value="">User 1</option>
                                                    <option value="">User 2</option>
                                                    <option value="">User 3</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Start Date</label>
                                                <input type="date" class="form-control" placeholder="Start Date"
                                                    aria-label="Start Date">
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Due Date</label>
                                                <input type="date" class="form-control" placeholder="Due Date"
                                                    aria-label="Due Date">
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="">No Progress</option>
                                                    <option value="">In Progres</option>
                                                    <option value="">Complate</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">Priority</label>
                                                <select name="priority" class="form-control">
                                                    <option value="">none</option>
                                                    <option value="">low</option>
                                                    <option value="">medium</option>
                                                    <option value="">high</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Create and Add
                                                Another</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>

    </section>
</section>
@endsection