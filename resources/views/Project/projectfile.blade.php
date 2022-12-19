@extends('layout.masterProject') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex">
            <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="bi bi-funnel-fill" style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
                <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-folder-fill" style="color: #57575A;"></i><strong style="color: #57575A;">Saved
                        Searches</strong>
                </a>

                <!-- button modal new project -->
                <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"></i> New Folder</button>
                <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal"
                    data-bs-target="#exampleModalAddtask"></i> Upload</button>
                <button class="btn btn-secondary me-3" style="background-color:#ffff" data-bs-toggle="modal"
                    data-bs-target="#exampleModalsetting"><i class="bi bi-gear-fill"
                        style="color: #838492;"></i></button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                </div>

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


        <!-- Page Content-->
        <section>
            <div class="container px-lg-0">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-15 col-xxl-4 mb-3">
                        <!--Ganti Ukuran-->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                                <div style="width:1100px;"
                                    class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n3 text-start">
                                    <strong><i class="bi bi-file-earmark-text"></i> File</strong></i>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2 ms-5 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex,
                                                repellendus, expedita modi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mx-1 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex,
                                                repellendus, expedita modi</p>
                                        </div>
                                    </div>
                                    <div><img src="images/filedoc.svg">Analys <br> May 12</div>
                                    <div class="desc">
                                        <label>Analys <br> May 12 </label>
                                        <strong><i class="filedoc.svg"></i> File</strong></i>
                                    </div>

                                    <ul class="pagination pagination-sm">
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2 mx-1 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor .</h5>
                                        <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex,
                                            repellendus, expedita modi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mx-1 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor .</h5>
                                        <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex,
                                            repellendus, expedita modi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 me-5 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Lorem ipsum dolor .</h5>
                                        <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex,
                                            repellendus, expedita modi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
    </div>
    </div>
</section>
</section>
@endsection