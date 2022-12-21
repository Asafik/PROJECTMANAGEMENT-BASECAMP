@extends('layout.masterReq') @section('content')
<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
          <!-- Page Features-->
          <div class="row gx-lg-5">
              <div class="col-lg-18 mb-5">
                  <div class="card bg-light border-0 h-100">
                      <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                              <div class="card-body">
                                <div class="container" style=" padding-top: 1%; padding-bottom: 1%;">
                                  <div class="row align-items-start">
                                    <div class="col text-start"> 
                                      <h5  class="fw-bold text-start" style="color: #57575A; margin-left: -5%;">Conversations</h5>
                                      <p class="" style="color: #57575A; margin-left: -5%;">4 Conversation</p>
                                    </div>
                                    <div class="col">

                                    </div>
                                    <div class="col text-end" style="margin-top: 4px;">
                                        <button type="button" class="btn btn-success bi-plus-circle-fill border-0"
                                            style="background-color: #20B15A;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalAddConversation"> Add Conversation</button>
                                    </div>
                                </div>
                                <hr style="width:115%; margin-left: -8%;">
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body"> <a class="nav-link active" href="/conversationchat">
                                                <h5 class="card-title text-start"><button type="button"
                                                        class="btn btn-warning position-relative"
                                                        style="border-radius: 50% ;">
                                                        D
                                                        <span
                                                            class="position-absolute top-4 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </button>&nbsp Dewi</h5>
                                                <p class="" style="margin-top: -6%; margin-left: 70%;"><i
                                                        class="bi bi-star-fill text-end"
                                                        style="color: #FEA21F; margin-left: 10%;"></i><i
                                                        class="bi bi-three-dots btn" style="margin-left: 10%;"></i></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add conversetion -->
    <div class="modal fade" id="exampleModalAddConversation" tabindex="-1" aria-labelledby="exampleModalAddConversation"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header mb-2">
                    <h5 class="modal-title" id="exampleModalAddConversation">Add Conversation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body text-center">
                        <div class="conversation mb-4">
                            <button type="button" class="border btn btn-light col-sm-3"
                                style="background-color: #F0F8FF;"
                                data-bs-target="#exampleModalAddConversation">Conversation</button>
                            <button type="button" class="border btn btn-default col-sm-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAddPersonal">Personal</button>
                        </div>
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Conversation Name</label>
                                    <input type="text" id="appt" name="appt" class="form-control col-lg-6"
                                        style="margin-left: 3%;">
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Users*</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5 me-2">Icon</label>
                                    <button type="button" class="btn btn-warning bi bi-bicycle border-0"></button>
                                </div>
                            </form>
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
    <!-- end conversetion -->
    <!-- add conversation personal -->
    <div class="modal fade" id="exampleModalAddPersonal" tabindex="-1" aria-labelledby="exampleModalAddPersonal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header mb-2">
                    <h5 class="modal-title" id="exampleModalAddPersonal">Add Conversation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="conversation mb-4 text-center">
                            <button type="button" class="border btn btn-light col-sm-3"
                                style="background-color: #FFFFFF;" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAddConversation">Conversation</button>
                            <button type="button" class="border btn btn-default col-sm-3"
                                style="background-color: #F0F8FF;" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAddPersonal">Personal</button>
                        </div>
                        <div class="container">
                            <form action="#" method="#" enctype="multipart/form-data">
                                <div class="d-flex col-lg-6 mb-3">
                                    <label for="inputEmail4" class="form-label col-lg-5">Users*</label>
                                    <select name="status" class="form-select col-lg-6" style="margin-left: 3%;">
                                        <option value="">User 1</option>
                                        <option value="">User 2</option>
                                        <option value="">User 3</option>
                                    </select>
                                </div>
                            </form>
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
    <!-- end conversetion persenola -->
</section>
@endsection
