@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-4">
    <div class="container ">
        <!-- Page Features-->
        <div class="row">
            <div class="col-lg-12 mb-5 d-flex">
                <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <i class="bi bi-funnel-fill" style="color: #57575A;"></i><strong
                        style="color: #57575A;">Filter</strong>
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
                <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i
                        class="bi bi-gear-fill" style="color: #838492;"></i></button>
                <!-- fitur filter -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel" style="width: 40%;">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"
                                style="color: #57575A;"></i>&nbsp Filters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form action="#" method="#" enctype="multipart/form-data">
                            <div class="d-flex mb-3">
                                <label for="inputEmail4" class="form-label col-sm-3 me-2">Search Text</label>
                                <input type="email" id="appt" name="appt" class="form-control"
                                    style="margin-left: 1.5%;">
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
                                <label for="inputEmail4" class="form-label col-sm-3">Due Date</label>
                                <select name="status" class="form-select" style="margin-left: 3%;">
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
                                <label for="inputEmail4" class="form-label col-sm-3">Date Complated</label>
                                <select name="status" class="form-select" style="margin-left: 3%;">
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
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                            <div class="d-flex  mb-3">
                                <label for="inputEmail4" class="form-label col-sm-3">Milestone Linked</label>
                                <div class="form-check form-check-inline" style="margin-left: 3%;">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="offcanvas">Close</button>
                                <button type="Submit" class="btn btn-success bi bi-funnel-fill">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end fitur filter -->
            </div>
            <!--card list & task-->
            <div class="col-lg-12 mb-3">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                        <div style="width:1100px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a
                                href=""><span class="text-white">Analyst </a></i></div>
                        @foreach ($project_tasks as $project_tasks)
                        <ul>
                            <p class="fs-9 fw-bold text-start ">
                            <p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i
                                    class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i
                                    class="bi bi-three-dots-vertical"
                                    style="margin-right: 1%"></i>{{$project_tasks ->title_task }} <mark
                                    style="background-color: #D0D9EE; color: #838492;">{{$project_tasks->status}}</mark><button
                                    type="button" class="btn btn-warning btn-sm"
                                    style="margin-left: 1%; margin-top: 1; color: #fff; ">{{ $project_tasks->priority }}</button><mark
                                    style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark
                                    style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i
                                    class="bi bi-flag-fill btn" style="color : #3766DF"></i><a
                                    class="bi bi-chat-left btn" href="discussopd.html"
                                    style="color: #A3A4A7; margin-left: -1%;"></a></p>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <a class="h6 text-decoration-none text-success mb-5" href="" data-bs-toggle="modal"
                data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
            <!--end card list & task-->
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Task List</label>
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
                                <div class="row mb-3 mt-5">
                                    <div class="col">
                                        <label for="exampleInputText1" class="form-label">Milestone</label>
                                        <input type="text" name="#" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputText1" class="form-label">File</label>
                                        <input type="file" name="#" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection