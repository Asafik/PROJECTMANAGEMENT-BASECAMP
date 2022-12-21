@extends('layout.masterProject') @section('content')

<!-- Page Content-->
<section class="pt-2">
    <div class="container ">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-4 d-flex">
                <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-funnel-fill" style="color: #57575A;"></i><strong
                        style="color: #57575A;">Filter</strong>
                </a>
                <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddrecord"><i
                        class="bi bi-plus-circle"></i> Add Time</button>
                <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff" data-bs-toggle="modal"
                    data-bs-target="#settingtimeboard"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
            </div>
            <!--card list & task-->
            <div class=" me-md-2 col-lg-12 col-xxl-12 mb-5">
                <div class="card bg-light border-0 h-100 mb-5">
                    <div class="col-lg-6 mb-4 d-flex ms-4">
                        <h6 class="mt-3 me-3  " style="color:#000000;">
                            <h5 class="mt-4">Total Time Spent</h5>
                        </h6>
                        <div class="col-3 mt-3 ms-2" style="background:#6495ED;">
                            <h6 class="mt-2 me-auto">
                                <center>40 Hourse</center>
                            </h6>
                        </div>
                        <div class="col-3 mt-3 ms-2" style="background:#6495ED;">
                            <h6 class="mt-2 me-auto">
                                <center>21 Minutes</center>
                            </h6>
                        </div>
                    </div>
                    <div class="card me-md-2 col-lg-11 col-xxl-12 ms-5" style="background-color:#D0D9EE;">
                        <!-- RIWAYAT TIME RECORD -->
                        <div class="record" style="border-bottom: 1px solid darkgrey">
                            <div class="records me-md-2 col-lg-11 mb-1 ms-5">
                                <div class="time col-lg-5 mt-3 d-flex">
                                    <div class="col-3 mt-3">
                                        <h3>10 : 30</h3>
                                    </div>
                                    <div class="col-1 ms-3 mt-1">
                                        <img src="https://iili.io/Hffr7Hl.png" style="height: 35px;">
                                    </div>
                                    <!-- rincian setiap time profile akun| tgl req-->
                                    <div class="rincian col-lg-11 ms-2 ">
                                        <div class="col-5 mt-2 ms-2">Putu | 10 Jan</div>
                                        <div class="nameproject mt-1 bi bi-circle-fill ms-2" style="font-size:12px ;">
                                            <strong class="">General Project / Project ABCD</strong>
                                        </div>
                                        <p class="text-start"
                                            style=" margin-left: 6% ; margin-top: -1%; font-size:13px;">
                                            Pembahasan request admin</p>
                                    </div>
                                    <div class="me-md-2 col-lg-11 mb-1 ms-5 mt-3">
                                        <div class="col-lg-11 col-xxl-12 text-center ms-5">
                                            <button class="second btn btn-outline-secondary me-md-1"><i
                                                    class="bi bi-play-circle" style="font-size:15px;"></i></button>
                                            <button class="btn btn-outline-secondary me-md-1"><i
                                                    class="bi bi-pencil-fill" style="font-size:15px;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalEditRecordFull"></i></button>
                                            <button class="btn btn-outline-secondary me-md-1"><a
                                                    class="bi bi-arrow-clockwise" style="font-size:15px; color:inherit;"
                                                    id="reset"></a></button>
                                            <button class="btn btn-outline-secondary me-md-1"><a
                                                    class="bi bi-trash-fill" style="font-size:15px; color:inherit;"
                                                    id="delete"></a></button>
                                            <button type="button"
                                                class="btn btn-outline-secondary me-md-2 btn btn-success"
                                                style="color: #ffffff; background-color:#20B15A;">Complete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RIWAYAT RECORD -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal quick add time-->
    <div class="modal fade" id="exampleModalAddrecord" tabindex="-1" aria-labelledby="exampleModalAddrecord"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-align: center;" id="exampleModalAddrecord">Add Time Record
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-5">
                                        <label for="inputEmail4" class="form-label">Group Or Project
                                            Name</label>
                                        <select name="status" class="form-control">
                                            <option selected>Pilih Group Project</option>
                                            <option class="form-select" aria-label="Disabled select example" disabled>
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
                                    <div class="col-5">
                                        <label for="inputEmail4" class="form-label">Item Tittle</label>
                                        <input type="text" name="#" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <center class="mb-3">
                        <button type="Submit" class="btn btn-primary col-4 ms-3">Quick Add</button>
                        <button class="btn btn-success col-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModalAddRecordFull" style=" float: right; margin-right: 15px;">Full
                            Add Form</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir add Quick add -->
    <!-- add full add time record -->
    <div class="modal fade" id="exampleModalAddRecordFull" tabindex="-1" aria-labelledby="exampleModalAddRecordFull"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalAddRecordFull">Add Time
                        Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Time Worked</label>
                                    <input type="time" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Doing</label>
                                    <textarea type="text" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;"></textarea>
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Date</label>
                                    <input type="date" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">By</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                        <option selected>Pilih User</option>
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                                <div class="radio d-flex mb-3">
                                    <label for="inputEmail4" class="form-label">Status</label>
                                    <div class="form-check ms-5">
                                        <input class="form-check-input ms-5" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Not Started
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Started
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Completed
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="Submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end full full add time record -->
    <!-- add full edit time record -->
    <div class="modal fade" id="exampleModalEditRecordFull" tabindex="-1" aria-labelledby="exampleModalEditRecordFull"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalEditRecordFull">Edit Time
                        Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Time Worked</label>
                                    <input type="time" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Doing</label>
                                    <textarea type="text" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;"></textarea>
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Date</label>
                                    <input type="date" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">By</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                        <option selected>Pilih User</option>
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                                <div class="radio d-flex mb-3">
                                    <label for="inputEmail4" class="form-label">Status</label>
                                    <div class="form-check ms-5">
                                        <input class="form-check-input ms-5" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Not Started
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Started
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Completed
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="Submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end full full edit time record -->
    <!-- fitur filter -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
        style="width: 40%;">
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
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Set Order</option>
                        <option value="">General Project 1</option>
                        <option value="">General Project 2</option>
                        <option value="">General Project 3</option>
                    </select>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Ascending</option>
                        <option value="">General Project 1</option>
                        <option value="">General Project 2</option>
                        <option value="">General Project 3</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Project Group</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Pilih Group</option>
                        <option value="">General Project 1</option>
                        <option value="">General Project 2</option>
                        <option value="">General Project 3</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Project</label>
                    <select name="selectproject" class="form-control" style="margin-left: 3%;">
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
                    <label for="inputEmail4" class="form-label col-sm-3">Created By</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Pilih User</option>
                        <option value="">User 1</option>
                        <option value="">User 2</option>
                        <option value="">User 3</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Assigned To</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Pilih User</option>
                        <option value="">User 1</option>
                        <option value="">User 2</option>
                        <option value="">User 3</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Priority</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Select</option>
                        <option value="">none</option>
                        <option value="">Low</option>
                        <option value="">Mediumm</option>
                        <option value="">High</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Status</label>
                    <select name="status" class="form-select " style="margin-left: 3%;">
                        <option selected>Select</option>
                        <option value="">No Progres</option>
                        <option value="">Complated</option>
                        <option value="">In Progres</option>
                    </select>
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Time</label>
                    <input type="time" id="appt" name="appt" class="form-control" style="margin-left: 3%;">
                </div>
                <div class="d-flex mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Date Created</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
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
                    <select name="status" class="form-select " style="margin-left: 3%;">
                        <option selected>Select</option>
                        <option value="">Last 7 Days</option>
                        <option value="">Last 30 Days</option>
                        <option value="">Last 90 Days</option>
                        <option value="">Last 180 Days</option>
                        <option value="">Last 365 Days</option>
                    </select>
                </div>
                <div class="d-flex  mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Date</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Select</option>
                        <option value="">Today</option>
                        <option value="">This Month</option>
                        <option value="">Previous Month</option>
                        <option value="">Range</option>

                    </select>
                </div>
                <div class="d-flex  mb-3">
                    <label for="inputEmail4" class="form-label col-sm-3">Linked Item</label>
                    <select name="status" class="form-select" style="margin-left: 3%;">
                        <option selected>Select</option>
                        <option value="">Not Linked</option>
                        <option value="">Tasks</option>

                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas">Close</button>
                    <button type="Submit" class="btn btn-success bi bi-funnel-fill">Apply</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end fitur filter -->
    <!-- setting time record -->
    <div class="modal" id="settingtimeboard" tabindex="-1" aria-labelledby="settingtimeboard" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="settingtimeboard">Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <h6><strong>Display</strong></h6>
                                <hr>
                                <div class="d-flex col-lg-8 mb-2">
                                    <i class="bi bi-bell ms-1 me-3" style="font-size:15px"></i>
                                    <label for="inputEmail4" class="form-label col-lg-12">Include Archived
                                        Project</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                                <div class="d-flex col-lg-8 mb-2">
                                    <i class="bi bi-arrow-return-left ms-1 me-3" style="font-size:15px"></i>
                                    <label for="inputEmail4" class="form-label col-lg-12">Enable Undo Action</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                                <div class="d-flex col-lg-8 mb-2">
                                    <i class="bi bi-stickies ms-1 me-3" style="font-size:15px"></i>
                                    <label for="inputEmail4" class="form-label col-lg-12">Sticky Header</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                                <h6><strong>Export Import & Share</strong></h6>
                                <hr>
                                <div class="d-flex col-lg-8 mb-2">
                                    <i class="bi bi-cloud-download ms-1 me-3" style="font-size:15px"></i>
                                    <label for="inputEmail4" class="form-label col-lg-12">Export XLS</label>
                                    <h6 class="" style="font-size: 12px; color:gray;">All </h6>
                                    <h6 class="" style="font-size: 12px; color:gray; margin-left:3px;"> | </h6>
                                    <h6 class="" style="font-size: 12px; color:gray; margin-left:3px;"> Filtered</h6>
                                    <i class="bi bi-question-circle"
                                        style="font-size: 12px; margin-left:3px; margin-top:-2px;"></i>
                                </div>
                                <div class="d-flex col-lg-8 mb-2">
                                    <i class="bi bi-share ms-1 me-3" style="font-size:15px"></i>
                                    <label for="inputEmail4" class="form-label col-lg-12">Copy link with applied
                                        filters</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end setting time record -->
</section>
@endsection