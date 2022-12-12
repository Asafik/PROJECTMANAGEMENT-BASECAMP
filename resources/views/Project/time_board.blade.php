@extends('layout.master')
@section('content')

<!-- Page Content-->
<section class="pt-2">
    <div class="container ">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-4 d-flex">
                <a class="bi bi-funnel h5 text-decoration-none text-secondary me-3"> Filter</a>
                <a class="bi bi-folder-fill h5 text-decoration-none text-secondary me-3 me-auto"> Saved Searches</a>
                <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModalAddrecord"><i
                        class="bi bi-plus-circle "></i> Add Time</button>
                <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear"></i></a>
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
                                <center>40 Hours</center>
                            </h6>
                        </div>
                        <div class="col-3 mt-3 ms-2" style="background:#6495ED;">
                            <h6 class="mt-2 me-auto">
                                <center>21 Minutes</center>
                            </h6>

                        </div>
                    </div>
                    <div class="card me-md-2 col-lg-11 col-xxl-12 ms-5" style="background-color:#D0D9EE;">
                        <!-- RIWAYAT TIME RICORD -->
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
                                                style="color: #ffffff;">Complete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RIWAYAT RICORD -->
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
                    <h5 class="modal-title" style="text-align: center;" id="exampleModalAddrecord">Add Time Ricord
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/StoreTime" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="/StoreTime" method="POST" enctype="multipart/form-data">
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
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Time
                                        Worked</label>
                                    <input type="time" id="appt" name="appt" class="col-lg-6" style="margin-left: -2%;">
                                </div>
                                <div class="d-flex mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Doing</label>
                                    <div class="col-lg-6 ms-5">
                                        <textarea class="form-control" style="margin-left: 19%;"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Date</label>
                                    <input type="Date" id="appt" name="appt" class="col-lg-6" style="margin-left: -2%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label">By</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 39%;">
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                                <div class="radio d-flex">
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
                                            Complated
                                        </label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Create</button>
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
                <form action="/Store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
<<<<<<< HEAD:resources/views/OpdReqProject/time_board.blade.php
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Time Worked</label>
                                    <input type="time" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label">TimeWorked</label>
                                            <input type="time" id="appt" name="appt" class="col-lg-6"
                                                style="margin-left: -2%;">
                                        </div>
                                        <div class="d-flex mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Doing</label>
                                            <div class="col-lg-6 ms-5">
                                                <textarea class="form-control" style="margin-left: 19%;"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Date</label>
                                            <input type="Date" id="appt" name="appt" class="col-lg-6"
                                                style="margin-left: -2%;">
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
                                                <input class="form-check-input ms-5" type="radio"
                                                    name="flexRadioDefault" id="flexRadioDefault1">
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
                                                    Complated
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
=======
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Time
                                        Worked</label>
                                    <input type="time" id="appt" name="appt" class="col-lg-6" style="margin-left: -2%;">
                                </div>
                                <div class="d-flex mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Doing</label>
                                    <div class="col-lg-6 ms-5">
                                        <textarea class="form-control" style="margin-left: 19%;"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Date</label>
                                    <input type="Date" id="appt" name="appt" class="col-lg-6" style="margin-left: -2%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label">By</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 39%;">
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                                <div class="radio d-flex">
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
                                            Complated
                                        </label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Update</button>
                    </div>
>>>>>>> parent of 9b40e0c (perubahan file timeboard,search dan menambah conversation):resources/views/Project/time_board.blade.php
                </form>
            </div>
        </div>
    </div>
    <!-- end full full edit time record -->
</section>
@endsection