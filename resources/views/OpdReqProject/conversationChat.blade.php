@extends('layout.master') @section('content')
<!-- Page Content-->
<section class="pt-2">
    <div class="container px-lg-0 d-flex mb-5">
        <!-- form kiri topik-->
        <div class="col-lg-12 border border-1" style="background-color: white; float:left; width:30%;">
            <div class="col-lg-12 mt-3">
                <div class="col-lg-10 ms-4 d-flex" style="font-size: 20px;">
                    <h5 class="col-lg-9">Topics</h5>
                    <button class="btn btn-secondary border-0" data-bs-toggle="modal"
                        data-bs-target="#addtopikconversation" style="background-color:#ffff; margin-top:-3%"><i
                            class="bi bi-plus" style="color: #838492; font-size:30px;"></i></button>
                </div>
                <hr class="" style="width: 93%;">
            </div>
            <div class="col-10 ms-3 p-1 mb-3">
                <button class="btn btn-success ms-4 border-0 d-flex" style="background-color:green; width:80%; border-radius:5px;"><a href="/conversation" style="color: #ffff; margin-left:10%; text-decoration:none"><i class="bi bi-reply"></i>Back to Conversation</a>
                </button>
            </div>
            <div class="col-10 ms-3 p-1">
                <div class="col ms-4 p-2" style="background-color: lightgrey; width:80%; ;border-radius:5px;">
                    <div class="col" style="text-align:center; font-size: 16px;">Design Timeboard</div>
                </div>
            </div>
        </div>
        <!-- modals tambah topik -->
        <div class="modal" id="addtopikconversation" tabindex="-1" aria-labelledby="addtopikconversation"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addtopikconversation">Add Topics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="#" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <form action="#" method="#" enctype="multipart/form-data">
                                    <div class="d-flex mb-5">
                                        <label for="inputEmail4" class="form-label col-sm-3 me-2">Title*</label>
                                        <input type="text" id="appt" name="appt" class="form-control"
                                            style="margin-left: 1.5%;">
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
        <!-- end modal tambah topik -->
        <!-- end form kiri topik -->
        <div class="row border border-1" style="background-color: white; width:75%;">
            <div class="col">
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title text-start"><button type="button"
                                class="btn btn-warning position-relative" style="border-radius: 50% ;">
                                D
                                <span
                                    class="position-absolute top-4 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>&nbsp Dewi</h5>
                        <button type="button" class="btn-close" style="margin-top: -6%; margin-left: 90%;"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                </div>
                <br>
                <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p>
                {{-- <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p>
                <p>Lorem Lorem Lorem lorem</p> --}}
                <form action="#" method="#" enctype="multipart/form-data">
                    <div class="d-flex mb-5 col-sm-10">
                        <button class="btn btn-light" style="background-color:lightgray;"><i
                                class="bi bi-paperclip"></i></button>
                        <input type="text" id="appt" name="appt" placeholder="Ketikkan pesan anda" class="form-control">
                        <button class="btn btn-light">
                            <i class="bi bi-arrow-right-circle-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end content -->
    </div>
</section>
@endsection

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>