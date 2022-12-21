@extends('layout.masterProject') @section('content')
    <section class="pt-3">
        <div class="container ">
            <!-- Page Features-->
            <div class="row ">
                <div class="col-lg-12 mb-4 d-flex">
                    <a class="btn btn-secondary-outline mt-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="bi" style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
                    </a>
                    <input class="form-control ms-1 me-1" type="text" placeholder="Choose"
                        aria-label=".form-control-lg example" style="width: 15%;margin-left: 20%; margin-top: 1%;">
                    <input class="form-control ms-1 me-1" type="text" placeholder="Contain text"
                        aria-label=".form-control-lg example" style="width: 15%;margin-left: 20%; margin-top: 1%;">
                    <input class="form-control ms-1 me-1" type="text" placeholder="Save Search"
                        aria-label=".form-control-lg example" style="width: 15%;margin-left: 20%; margin-top: 1%;">
                    <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href=""
                        role="button" aria-controls="offcanvasExample">
                        <i class="bi bi-folder-fill" style="color: #57575A; font-size: 30px;"></i><strong
                            style="color: #57575A;"></strong>
                    </a>

                    <button class="btn btn-success mt-2 me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddCalendar"><i class="bi bi-plus-circle"></i> Add List</button>
                    <button class="btn btn-secondary me-3"
                        style="background-color:#d0d9ee; border-style: none; font-size: 30px;"><i class="bi bi-gear"
                            style="color: #838492;"></i></button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header
        
                            <h5 class="offcanvas-title"
                            id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill" style="color: #57575A;"></i>&nbsp
                            Filters</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <hr style="margin-top: -4%;">
                                Some text as placeholder. In real life you can have the elements you have chosen. Like,
                                text, images, lists, etc.
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
                <!--modal quick add time-->
                <div class="modal fade" id="exampleModalAddCalendar" tabindex="-1"
                    aria-labelledby="exampleModalAddCalendar" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="text-align: center;" id="exampleModalAddCalendar">Add
                                    Calendar event
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="#" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="#" method="#" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-5">
                                                    <label for="inputEmail4" class="form-label"></label>
                                                    <select name="status" class="form-control">
                                                        <option selected>Enter Group Project</option>
                                                        <option class="form-select" aria-label="Disabled select example"
                                                            disabled>
                                                            DINKES
                                                           <option value="">Project ABCD</option>
                                                        </option>
                                                        <option class="form-select"
                                                            aria-label="Disabled select example"disabled>
                                                            DISBUDPAR
                                                        <option value="">Project DEFG</option>
                                                        <option value="">Project EFGH</option>
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-5">
                                                    <label for="inputEmail4" class="form-label">Item Title</label>
                                                    <input type="text" name="#" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <center class="mb-3">
                                    <button type="Submit" class="btn btn-success col-4 ms-3">Quick Add</button>
                                    <button class="btn btn-primary col-2" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalAddRecordFull"
                                        style=" float: right; margin-right: 15px;">Full
                                        Add Form</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- akhir add Quick add -->
                <!-- add full add calendar event -->
                <div class="modal fade" id="exampleModalAddRecordFull" tabindex="-1"
                    aria-labelledby="exampleModalAddRecordFull" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalAddRecordFull">Add Calendar Event</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="#" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="#" method="#" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Title</label>
                                                <input type="text" id="appt" name="appt" class="col-lg-6"
                                                    style="margin-left: -2%;">
                                            </div>
                                            <div class="row col-lg-3">
                                                <a href="#appt"><i class="bi bi-pencil-square"
                                                        style="color: black"></i></a>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label">Doing</label><br>
                                                <div class="col-lg-6 ms-5">
                                                    <textarea class="form-control" style="margin-left: 19%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">All
                                                    day</label>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Date
                                                    From</label>
                                                <input type="Date" id="appt" name="appt" class="col-lg-6"
                                                    style="margin-left: -2%;">
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Date
                                                    To</label>
                                                <input type="Date" id="appt" name="appt" class="col-lg-6"
                                                    style="margin-left: -2%;">
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Recurence</label>
                                            </div>

                                            <div class="d-flex col-lg-6 mb-3">
                                                <label for="inputEmail4" class="form-label">invite user</label>
                                                <input type="text" id="appt" name="appt" class="col"
                                                    style="margin-left: -2%;">
                                            </div>
                                            <div class="radio d-flex">
                                                <label for="inputEmail4" class="form-label">Status</label>


                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">RSVP
                                                        update</label>
                                                </div>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Send
                                                    Notification Email to Me</label>
                                            </div>
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
                </div>
                <!-- end full add calendar event -->
                <!--card list & task-->
                <div class="col-lg-12 col-xxl-6 mb-3">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                            {{-- halaman calender --}}
                        </div>
                    </div>
                    <!--end card list & task-->
                </div>
            </div>
        </div>
    </section>
@endsection
