@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex">
              <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-funnel-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
              </a>
              <!-- <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-folder-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Saved Searches</strong>
              </a> -->
              <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-folder-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Saved Searches</strong>
              </a>
              <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Add List</button>
              <button class="btn btn-success me-3" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddDiscussion"><i class="bi bi-plus-circle"></i> Add Discussion</button>
              <button class="btn btn-secondary me-3" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
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
                            <select name="sort1" class="form-select col-lg-6" >
                                <option value="">Sort 1</option>
                                <option value="">Sort 2</option>
                                <option value="">Sort 3</option>
                            </select>
                          </div>
                          <div class="col-sm-4">
                            <select name="sort2" class="form-select col-lg-6" >
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
                            <select name="CreateBy" class="form-select col-lg-6" >
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
                            <select name="DateCreated" class="form-select col-lg-6" >
                                <option value="">Date 1</option>
                                <option value="">Date 2</option>
                                <option value="">Date 3</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <div class="form-group row">
                          <label for="LastCommentBy" class="col-sm-4 col-form-label">Last Comment By</label>
                          <div class="col-sm-8">
                            <select name="LastCommentBy" class="form-select col-lg-6" >
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
                            <select name="LastActivity" class="form-select col-lg-6" >
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
                            <select name="Private" class="form-select col-lg-6" >
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
        <p class="fw-bolder h5 me-auto mb-4">discuss</p>

        
        <!-- Page Features-->
    <div class="row gx-lg-6">
         <!--card Request  -->
        <div class="col-lg-4 col-xxl-5 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body fs-6 text-sm-start p-2 p-lg-2 pt-0 pt-lg-0">
                    <div style="width:350px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href="#"><span class="text-white"><strong>Project ABCD</strong></a></i></div>
                        <p class="text-end  me-md-2"><i class="bi bi-star me-md-2"></i><i class="bi bi-gear"></i></p>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mb-5 text-center">
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-check-circle" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-chat-left-text" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-flag" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-clock" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-calendar4" style="font-size:20px mb-5"></i></button>
                        <button type="button" class="btn btn-outline-secondary me-md-2"><i class="bi bi-file-earmark-text" style="font-size:20px mb-5"></i></button>
                        </div>
                    </div>
                    <!-- <hr size="10px" width="50%" style=""> -->
                </div>
            </div>

            
  
    </div>
    </div>
</section>
@endsection