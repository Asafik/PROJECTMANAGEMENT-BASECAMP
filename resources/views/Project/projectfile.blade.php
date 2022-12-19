@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex"> 
        <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-funnel-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
          <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-folder-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Saved Searches</strong>
          </a>

          
            <!-- button modal new project -->
           <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalnewfolder"></i> New Folder</button>
              <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalupload"></i> Upload</button>
              <button class="btn btn-secondary me-3" style="background-color:#ffff" data-bs-toggle="modal" data-bs-target="#exampleModalsetting"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
                    <div class="modal fade" id="exampleModal" tabindex="-1"         aria-labelledby="exampleModalLabel" aria-hidden="true">
                    </div>

                <!-- modal filter -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"  style="color: #57575A;"></i>&nbsp Filters</h5>
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
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Uploaded By</label>
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
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Uploaded Date </label>
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
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Size</label>
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
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Application</label>
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
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Extension</label>
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
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Comments</label>
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
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Versions</label>
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
                            <label for="inputPassword3" class="col-sm-4 col-form-label">Locations</label>
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
                            <a href="#" class="btn btn-light me-auto btn"> 
                                <i i class="bi bi-file-earmark-fill"  style="color: gray"></i><strong style="color: gray;">&nbspSave Search & Apply</strong>
                            </a>
                            <a href="#" class="btn btn-success me-auto btn"> 
                                <i class="bi bi-funnel-fill"  style="color: white"></i><strong style="color: white;">&nbspApply</strong>
                            </a>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
            
           <!--modal new folder-->
           <div class="modal fade" id="exampleModalnewfolder" tabindex="-1" aria-labelledby="exampleModalnewfolder"   aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalnewfolder">Add Folder</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/store" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">
                                <div class="container">
                                    <form action="/store" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Folder Name *</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                           </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Folder Description</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="title_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputText1" class="form-label" style="margin-bottom:1%">Parent Folder</label>
                                            <div class="card d-grid gap-2">
                                                <div class="mt-2" style="margin-left:30px">
                                                    <button class="btn btn-outline-light text-dark text-start" type="button" style="height:100%;width:97%"><img src="images/folder-biru.svg">&nbsp Files </button>
                                                </div>
                                                <div class="mt-2" style="margin-left: 80px" >
                                                    <button class="btn btn-light text-dark text-start" type="button" style="height:100%;width:97%"><img src="images/folder-biru.svg">&nbsp Task 1 </button>
                                                </div>
                                                <div class="mt-1 mb-2" style="margin-left:80px; ">
                                                    <button class="btn btn-light text-dark text-start" type="button" style="height:100%;width:97%;" ><img src="images/folder-biru.svg">&nbsp Task 2 </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal upload -->
            <div class="modal fade" id="exampleModalupload" tabindex="-1" aria-labelledby="exampleModalupload" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalupload">Add File</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="row">
                            <div class= "col">
                                <div class="  mt-3 mb-3 ms-5 me-5">
                                    <button class="btn btn-primary" type="button" style="height:45px;width:190px "><img src="images/upload-file.svg">&nbsp Upload Files</button>
                                    <button class="btn btn-primary" type="button" style="height:45px;width: 190px;px; margin-left:4%"><img src="images/file-folder.svg">&nbsp Upload Folder</button>
                                </div>
                            </div>
                        </div>
                        <div class=" ms-5 me-5">
                            <label for="exampleInputText1" class="form-label" style="margin-bottom:1%">Parent Folder</label>
                            <div class="card d-grid gap-2">
                                <div class="mt-2" style="margin-left:30px">
                                    <button class="btn btn-outline-light text-dark text-start" type="button" style="height:100%;width:95%"><img src="images/folder-biru.svg">&nbsp Files </button>
                                </div>
                                <div class="mt-2" style="margin-left: 80px" >
                                    <button class="btn btn-light text-dark text-start" type="button" style="height:100%;width:94%"><img src="images/folder-biru.svg">&nbsp Task 1 </button>
                                </div>
                                <div class="mt-1 mb-2" style="margin-left:80px">
                                    <button class="btn btn-light text-dark text-start" type="button" style="height:100%;width:94%;" ><img src="images/folder-biru.svg">&nbsp Task 2 </button>
                                </div>
                            </div>
                        </div>
                          
                            <div class="mb-3 row me-5" style="margin-left: 7%">
                                <label for="Notivications" class="col-sm-3 col-form-label">Notifications</label>
                                <div class="col-sm-8 align-self-center ms-3">
                                    <i class="bi-person"> No followers</i>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                       
                    </div>
                </div>
            </div>
            <!-- modal setting -->
            <div class="modal fade" id="exampleModalsetting" tabindex="-1" aria-labelledby="exampleModalsetting" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalsetting">settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                          <form action="/storetask" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3  ">
                                  <label for="exampleInputEmail1" class="form-label text-primary" >Display</label>
                                </div>
                                <div class="ms-4">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="images/manage-search.svg" width="30"> 
                                                <label for="exampleInputEmail1" class="form-label">View &nbsp</label>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-secondary btn-sm" style="height:30px;width:130px">Active</button>
                                                <button type="button" class="btn btn-secondary btn-sm" style="height:30px;width:130px">Deleted</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <img src="images/notif-file.svg" width="30"> 
                                                <label for="exampleInputEmail1">Show notifications &nbsp</label>
                                            </div>

                                            <div class="col">
                                                <label class="form-check form-switch" for="flexSwitchCheckChecked">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></label>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <img src="images/undo.svg" width="30"> 
                                                <label for="exampleInputEmail1">Enable undo actions &nbsp</label>
                                            </div>

                                            <div class="col">
                                                <label class="form-check form-switch" for="flexSwitchCheckChecked">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <img src="images/sticky-note.svg" width="30"> 
                                                <label for="exampleInputEmail1">Sticky header</label>
                                            </div>

                                            <div class="col">
                                                <label class="form-check form-switch" for="flexSwitchCheckChecked">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked></label>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="mb-3  ">
                                  <label for="exampleInputEmail1" class="form-label text-primary" >Export, Import, dan Share</label>
                                </div>
                                <div class="ms-4">
                                    <div class="mb-3">
                                        <img src="images/link-copy.svg" width="30"> 
                                        <label for="exampleInputEmail1" class="form-label">Copy link with applied filters</label>
                                    </div>
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
                <div class="row gx-lg-5">
                    <div class="col-lg-15 col-xxl-4 mb-3"> <!--Ganti Ukuran-->
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                                <div style="width:1100px;" class="btn bg-primary bg-gradient text-white rounded-3 mb-3 mt-n3 text-start"><strong><i class="bi bi-file-earmark-text"></i> File</strong></i></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2 ms-5 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/addfileplus.svg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 mt-2">
                                            <img src="images/tambahfile.svg">
                                        </div>

                                        <div class="col">
                                            <h5 class="mb-0 mt-3">New </h5> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mx-1 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex, repellendus, expedita modi</p>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-2 mt-2">
                                                <img src="images/filedoc.svg">
                                            </div>

                                            <div class="col">
                                                <h5 class="mb-0 mt-3">Analys </h5> 
                                                <h7 class="text-danger" >May 12</h7>
                                            </div>  
                                                <div class="mt-2">                                      
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" style="bp"><img src="images/folderfiledownload.svg"></button>
                                                        <button type="button" class="btn btn-outline-secondary"><img src="images/editfile.svg"></button>
                                                        <button type="button" class="btn btn-outline-secondary"><img src="images/trash-fill.svg"></button>
                                                    </div>     
                                                </div>       
                                        </div>
                                </div>
                                <div class="col-sm-2 mx-1 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex, repellendus, expedita modi</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2 mt-2">
                                            <img src="images/filedoc.svg">
                                        </div>

                                        <div class="col">
                                            <h5 class="mb-0 mt-3">Analys </h5> 
                                            <h7 class="text-danger">May 12</h7>
                                        </div>
                                        <div class="mt-2">                                      
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/folderfiledownload.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/editfile.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/trash-fill.svg"></button>
                                            </div>     
                                        </div>      
                                    </div>
                                </div>  
                                <div class="col-sm-2 mx-1 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex, repellendus, expedita modi</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 mt-2">
                                            <img src="images/filedoc.svg">
                                        </div>

                                        <div class="col">
                                            <h5 class="mb-0 mt-3">Analys </h5> 
                                            <h7 class="text-danger">May 12</h7>
                                        </div>
                                              
                                        <div class="mt-2">                                      
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/folderfiledownload.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/editfile.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/trash-fill.svg"></button>
                                            </div>     
                                        </div>  
                                    </div>
                                </div>  
                                <div class="col-sm-2 me-5 mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lorem ipsum dolor .</h5>
                                            <p class="card-text">sit amet consectetur adipisicing elit. Laborum ex, repellendus, expedita modi</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2 mt-2">
                                            <img src="images/filedoc.svg">
                                        </div>
                                        <div class="col">
                                            <h5 class="mb-0 mt-3">Analys </h5> 
                                            <h7 class="text-danger">May 12</h7>
                                        </div>
                                        <div class="mt-2">                                      
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/folderfiledownload.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/editfile.svg"></button>
                                                <button type="button" class="btn btn-outline-secondary"><img src="images/trash-fill.svg"></button>
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
        </section>
                </section>
                        @endsection
                        