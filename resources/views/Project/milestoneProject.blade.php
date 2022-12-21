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
                data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Add Item</button>
            <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill"
                    style="color: #838492;"></i></button>
            <!-- fitur filter -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel" style="width: 52%;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"
                            style="color: #57575A;"></i>&nbsp Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="#" method="#" enctype="multipart/form-data">
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3 me-2">Search Text</label>
                            <input type="email" id="appt" name="appt" class="form-control" style="margin-left: 1.5%;">
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Sort By</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Set Order</option>
                                <option value="">General Project 1</option>
                                <option value="">General Project 2</option>
                                <option value="">General Project 3</option>
                            </select>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Ascending</option>
                                <option value="">General Project 1</option>
                                <option value="">General Project 2</option>
                                <option value="">General Project 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Sort Tasks By</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>select</option>
                                <option value="">Priority from low to high</option>
                                <option value="">Priority from high to low</option>
                                <option value="">Due date from Due soon to Due later</option>
                                <option value="">Due date from Due later to Due soon</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Project Group</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Pilih Group</option>
                                <option value="">General Project 1</option>
                                <option value="">General Project 2</option>
                                <option value="">General Project 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Project</label>
                            <select name="selectproject" class="form-control" style="margin-left: 2%;">
                                <option selected>Pilih Project</option>
                                <option class="form-select " aria-label="Disabled select example" disabled>
                                    DINKES
                                <option value="">Project ABCD</option>
                                </option>
                                <option class="form-select" aria-label="Disabled select example" disabled>
                                    DISBUDPAR
                                <option value="">Project DEFG</option>
                                <option value="">Project EFGH</option>
                                </option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Created By</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Pilih User</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Assigned To</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Pilih User</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Priority</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">none</option>
                                <option value="">Low</option>
                                <option value="">Mediumm</option>
                                <option value="">High</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Status</label>
                            <select name="status" class="form-select " style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">No Progres</option>
                                <option value="">Complated</option>
                                <option value="">In Progres</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Due Date</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Not Set</option>
                                <option value="">Set</option>
                                <option value="">Today</option>
                                <option value="">Tomorrow</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                                <option value="">In The Past</option>
                                <option value="">Range</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Date Created</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone-Date Updated</label>
                            <select name="status" class="form-select " style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Created By</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Pilih User</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Assigned To</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Pilih User</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Priority</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">none</option>
                                <option value="">Low</option>
                                <option value="">Mediumm</option>
                                <option value="">High</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Status</label>
                            <select name="status" class="form-select " style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">No Progres</option>
                                <option value="">Complated</option>
                                <option value="">In Progres</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Due Date</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Not Set</option>
                                <option value="">Set</option>
                                <option value="">Today</option>
                                <option value="">Tomorrow</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                                <option value="">In The Past</option>
                                <option value="">Range</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Tasks-Date Created</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                            </select>
                        </div>
                        <div class="d-flex mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Date Updated</label>
                            <select name="status" class="form-select " style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                            </select>
                        </div>
                        <div class="d-flex  mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Date Complated</label>
                            <select name="status" class="form-select" style="margin-left: 2%;">
                                <option selected>Select</option>
                                <option value="">Not Set</option>
                                <option value="">Set</option>
                                <option value="">Today</option>
                                <option value="">Tomorrow</option>
                                <option value="">Last 7 Days</option>
                                <option value="">Last 30 Days</option>
                                <option value="">Last 90 Days</option>
                                <option value="">Last 180 Days</option>
                                <option value="">Last 365 Days</option>
                                <option value="">In The Past</option>
                                <option value="">Range</option>
                            </select>
                        </div>
                        <div class="d-flex  mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Items | Follow</label>
                            <div class="form-check form-check-inline" style="margin-left: 3%;">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                        <div class="d-flex  mb-3">
                            <label for="inputEmail4" class="form-label col-sm-3">Milestone Linked</label>
                            <div class="form-check form-check-inline" style="margin-left: 2%;">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Close</button>
                            <button type="Submit" class="btn btn-success bi bi-funnel-fill">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end fitur filter -->
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
<br>
                <div class="row gx-lg-5">
                    <div class="col-lg-15 col-xxl-4 mb-5">
                        <!--Ganti Ukuran-->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div style="width: 100%" class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n4 text-center">
                                    <strong>Project System Attendance / Analyst and Documentation</strong></i>
                                </div>
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
                                        &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn"
                                        height="50"><mark
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
                                        &nbsp</button><img src="images/fotoprofilgroup.svg" class="btn"
                                        height="50"></button><mark
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
                        <div style="width: 100%" class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n4 text-center">
                            <strong>UI/UX Design</strong></i>
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
                            <a class="bi bi-chat-left btn" href="discussopd.html"
                                style="color: #A3A4A7; margin-left: -1%;"></a>
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
                            <a class="bi bi-chat-left btn" href="discussopd.html"
                                style="color: #A3A4A7; margin-left: -1%;"></a>
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
                            {{-- <img src="images/fotoprofilgroup.svg" class="btn" height="50" style="margin-left: -18%;margin-right: -18%;"> --}}
                            <mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                style="color: #FF3D00; background-color: #D0D9EE;">may 25</mark><i
                                class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">1</i><a
                                class="bi bi-chat-left btn" href="discussopd.html"
                                style="color: #A3A4A7; margin-left: -1%;">&nbsp2</a>
                        </p>
                        <p class="" style="text-align: justify; margin-left: 3%; margin-right: 1%"><i
                                class="bi bi-three-dots-vertical" style="margin-right:-2%"></i><i
                                class="bi bi-three-dots-vertical" style="margin-right: 1%;"></i><i
                                class="bi bi-check-circle" style="color:#FEA21F"></i> ipsum dolor sit amet, consectetur
                            adipiscing elit.<button type="button" class="btn btn-warning btn-sm"
                                style="margin-left: 1%; margin-top: 1; color: #fff; ">medium</button>
                            {{-- <img src="images/fotoprofilgroup.svg" class="btn" height="50" style="margin-left: -18%;margin-right: -18%;"> --}}
                            </button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due
                            </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 28</mark><i
                                class="bi bi-file-earmark btn fst-normal" style="color : #A3A4A7">3</i><a
                                class="bi bi-chat-left btn" href="discussopd.html"
                                style="color: #A3A4A7; margin-left: -1%;">&nbsp1</a></p>
                    </div>
                </div>
            </div>

        </section>
        @endsection