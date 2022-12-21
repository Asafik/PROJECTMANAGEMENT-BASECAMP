@extends('layout.masterProject') @section('content')

<!-- Page Content-->
<section class="pt-3">
  <div class="container px-lg-0">
    <div class="col-lg-12 mb-5 d-flex">
          <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-funnel-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
          </a>
          <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-folder-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Saved Searches</strong>
          </a>
          <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddList"><i class="bi bi-plus-circle"></i> Add List</button>
          <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddDiscussion"><i class="bi bi-plus-circle"></i> Add Discussion</button>
          <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 700px;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"  style="color: #57575A;"></i>&nbsp Filters</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div><hr style="margin-top: -4%;">
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              <div>
                <form>
                  <div class="mb-3 row">
                    <div class="form-group row">
                      <label for="SearchText" class="col-sm-4 col-form-label">Search Text</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="SearchText">
                      </div>
                    </div>
                  </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="SortBy" class="col-sm-4 col-form-label">Sort By</label>

                                    <div class="col-sm-4">
                                        <select name="sort1" class="form-select col-lg-6">
                                            <option value="">Sort 1</option>
                                            <option value="">Sort 2</option>
                                            <option value="">Sort 3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="sort2" class="form-select col-lg-6">
                                            <option value="">Sort 1</option>
                                            <option value="">Sort 2</option>
                                            <option value="">Sort 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="CreateBy" class="col-sm-4 col-form-label">Create By</label>
                                    <div class="col-sm-8">
                                        <select name="CreateBy" class="form-select col-lg-6">
                                            <option value="">Person 1</option>
                                            <option value="">Person 2</option>
                                            <option value="">Person 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="DateCreated" class="col-sm-4 col-form-label">Date Created</label>
                                    <div class="col-sm-8">
                                        <!-- ganti pakek kalender -->
                                        <input type="date" class="form-control" id="DateCreated">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="LastCommentBy" class="col-sm-4 col-form-label">Last Comment By</label>
                                    <div class="col-sm-8">
                                        <select name="LastCommentBy" class="form-select col-lg-6">
                                            <option value="">Person 1</option>
                                            <option value="">Person 2</option>
                                            <option value="">Person 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="LastActivity" class="col-sm-4 col-form-label">Last Activity</label>
                                    <div class="col-sm-8">
                                        <select name="LastActivity" class="form-select col-lg-6">
                                            <option value="">Activity 1</option>
                                            <option value="">Activity 2</option>
                                            <option value="">Activity 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="form-group row">
                                    <label for="Private" class="col-sm-4 col-form-label">Private</label>
                                    <div class="col-sm-8">
                                        <select name="Private" class="form-select col-lg-6">
                                            <option value="">Private 1</option>
                                            <option value="">Private 2</option>
                                            <option value="">Private 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                  <div class="mb-3 row">
                    <div class="form-group row">
                      <label for="Sticky" class="col-sm-4 col-form-label">Sticky</label>
                      <div class="col-sm-8">
                        <select name="Sticky" class="form-select col-lg-6" >
                            <option value="">Sticky 1</option>
                            <option value="">Sticky 2</option>
                            <option value="">Sticky 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              
              <div class="d-flex flex-row-reverse">
                <div class="p-2">
                  <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="offcanvas" data-bs-target="#l"><i class="bi bi-funnel-fill"></i> Apply</button>
                </div>
                <div class="p-2">
                  <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-file-earmark-fill"  style="color: #57575A;"> Saved Search & Apply</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <div class="col-lg-12 d-flex">
      <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="offcanvasExample">
      <h5>
        <i class="bi bi-chevron-down"  style="color: #57575A;"></i> <strong style="color: #57575A;"> Project Attendance System</strong>
      </h5>   
      </a>
          <h3><i class="bi bi-three-dots p-3" style="color: #838492; "></i></h3>
    </div>
    <div class="col-lg-12 mb-3 mx-7 d-flex">
      <table class="table">
        <thead>
          <tr  class="table-light">
            <th scope="col"></th>
            <th scope="col">Title</th>
            <th scope="col">Last Activity</th>
            <th scope="col">Comment</th>
          </tr>
        </thead>
        <tbody>
          <tr  class="table-success ">
            <th ><i class="bi bi-star-fill" style="color:#eba905;"></i></th>
            <td>discussion</td>
            <td>Mei 10, 2022 8:36pm <br> by Risma Klaudia</td>
            <td><i class="bi bi-chat-square-dots"></i> 0</td>
          </tr>
          <tr  class="table-success ">
            <th ><i class="bi bi-star-fill" style="color:#eba905;"></i></th>
            <td>discussion</td>
            <td>Mei 10, 2022 8:36pm <br> by Risma Klaudia</td>
            <td><i class="bi bi-chat-square-dots"></i> 0</td>
          </tr>
        </tbody>
      </table>
    </div>
    


    <!-- modal add list -->
      <div class="modal fade" id="exampleModalAddList" tabindex="-1" aria-labelledby="exampleModalAddList" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <div class="container">
                        <div class="row align-items-start">
                          <div class="col-auto me-auto">
                            <h5 class="modal-title" id="exampleModalAddList">Add List
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="height: 30px;"></button>
                          </div>
                        </div>
                      </div>
                  </div>
                  <form action="#" method="#" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="container">
                              <div class="mb-3 row">
                                <div class="mb-3 row">
                                  <label for="Title" class="col-sm-4 col-form-label">Title</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Title">
                                  </div>
                                </div>

                                <div class="mb-3 row">
                                  <label for="Description" class="col-sm-4 col-form-label">Description</label>
                                  <div class="col-sm-8">
                                    <textarea class="form-control" id="Description" rows="3"></textarea>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="Submit" class="btn btn-success me-3" style="background-color:#20B15A">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    <!-- end modal add list -->

    <!-- modal add discussion -->
      <div class="modal fade" id="exampleModalAddDiscussion" tabindex="-1" aria-labelledby="exampleModalAddDiscussion" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <div class="container">
                        <div class="row align-items-start">
                          <div class="col-auto me-auto">
                            <h5 class="modal-title" id="exampleModalAddDiscussion">Add Discussion
                          </div>
                        </div>
                      </div>
                  </div>
                  <form action="#" method="#" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="container">
                              <div class="mb-3 row">
                                <div class="mb-3 row">
                                  <label for="ListName" class="col-sm-4 col-form-label">List Name</label>
                                  <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Discussion List</option>
                                      <option value="1">example 1</option>
                                      <option value="2">example 2</option>
                                      <option value="3">example 3</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="mb-3 row">
                                  <label for="Title" class="col-sm-4 col-form-label">Title</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="Title">
                                  </div>
                                  <div class="col-sm-1 align-self-center">
                                  <i class="bi bi-tags-fill"></i>
                                  </div>
                                </div>

                                <div class="mb-0 row">
                                  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                                    <head>
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>Install and Use CKEditor In Laravel</title>
                                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                                    </head>
                                    <body>
                                      <div class="card-body">
                                                        <form method="post" action="" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                    </body>
                                    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $('.ckeditor').ckeditor();
                                        });
                                    </script>
                                    </html>

                                </div>

                                <div class="mb-1 row">
                                  <label for="Sticky" class="col-sm-3 col-form-label">Sticky</label>
                                  <div class="form-check form-switch col-sm-8 align-self-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckSticky" style="height: 20px; width: 40px;">
                                  </div>
                                </div>

                                <div class="mb-3 row">
                                  <label for="Private" class="col-sm-3 col-form-label">Private</label>
                                  <div class="form-check form-switch col-sm-8  align-self-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckPrivate" style="height: 20px; width: 40px;">
                                  </div>
                                </div>

                                <div class="mb-2 row">
                                  <label for="Notivications" class="col-sm-3 col-form-label">Notifications</label>
                                  <div class="col-sm-8 align-self-center">
                                    <i class="bi-person"> No followers</i>
                                  </div>
                                </div>

                                <div class="mb-3 row">
                                  <i class="bi bi-link-45deg"> Attached File</i>
                                </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="Submit" class="btn btn-success me-3" style="background-color:#20B15A">Create</button>
                      </div>
                  </form>


              </div>
          </div>
      </div>
    <!-- end modal add discussion -->
  </div>    

</section>
@endsection