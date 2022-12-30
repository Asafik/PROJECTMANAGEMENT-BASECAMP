@extends('layout.master') @section('content')



<!-- Page Content-->
<section class="pt-4">
    <div class="container ">
        <!-- Page Features-->
        <div class="row ">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
          @endif
            <div class="col-lg-12 mb-5 d-flex">
              <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-funnel-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Filter</strong>
              </a>
              <a class="btn btn-secondary-outline" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-folder-fill"  style="color: #57575A;"></i><strong style="color: #57575A;">Saved Searches</strong>
              </a>
              <a class="btn btn-secondary-outline me-auto btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-stack"  style="color: #57575A;"></i><strong style="color: #57575A;">Group By</strong>
              </a>
              <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Add List</button>
              <button class="btn btn-success me-3 border-0" style="background-color:#20B15A" data-bs-toggle="modal" data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle"></i> Add Task</button>
              <button class="btn btn-secondary me-3 border-0" style="background-color:#ffff"><i class="bi bi-gear-fill" style="color: #838492;"></i></button>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <i class="bi bi-funnel-fill"  style="color: #57575A;"></i>&nbsp Filters</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div><hr style="margin-top: -4%;">
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                  </div>
                  <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
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
            <!--card list & task-->
            <div class="col-lg-12 col-xxl-6 mb-3">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                        <div style="width:1100px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href=""><span class="text-white">Analyst </a></i></div>
                          @foreach ($project_tasks as $project_tasks)
                          <ul>
                                <p class="fs-9 fw-bold text-start "><p class="" style="text-align: justify; margin-left: 1%; margin-right: 1%"><i class="bi bi-three-dots-vertical" style="margin-right:-2%;"></i><i class="bi bi-three-dots-vertical"style="margin-right: 1%"></i>{{$project_tasks ->title_task }} <mark style="background-color: #D0D9EE; color: #838492;">{{$project_tasks->status}}</mark><button type="button" class="btn btn-warning btn-sm" style="margin-left: 1%; margin-top: 1; color: #fff; ">{{ $project_tasks->priority }}</button><mark style="background-color: #D0D9EE;margin-left: 1%; color: #838492;">due </mark><mark style="color: #FF3D00; background-color: #D0D9EE;">may 30</mark><i class="bi bi-flag-fill btn" style="color : #3766DF"></i><a class="bi bi-chat-left btn" href="discussopd.html"style="color: #A3A4A7; margin-left: -1%;">
                                <a href="/projectList_edit/{{ $project_tasks->id }}" style="color: orange"><i class="bi bi-pencil"></i></a>
                                
                                <a href="/projectList_delete/{{ $project_tasks->id }}" style="color: red" onclick="return confirm('Are you sure want to delete?')"><i class="bi bi-trash"></i></a>
                              </a></p>
                            </ul>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            <a class="h6 text-decoration-none text-success mb-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
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
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                  <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea type="text" name="list_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
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
  <div class="modal fade" id="exampleModalAddtask" tabindex="-1" aria-labelledby="exampleModalAddtask" aria-hidden="true">
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
                <input type="text" name="task_list" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title_task" value ="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Description</label>
                    <textarea type="text" name="description_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Assigned To</label>
                      <select name="status" class="form-control">
                        <option value="User 1">User 1</option>
                        <option value="User 2">User 2</option>
                        <option value="User 3">User 3</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Start Date</label>
                      <input type="date" class="form-control" name="start_date" placeholder="Start Date" aria-label="Start Date">
                    </div>
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Due Date</label>
                      <input type="date" class="form-control" name="due_date" placeholder="Due Date" aria-label="Due Date">
                    </div>
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Status</label>
                      <select name="status" class="form-control">
                        <option value="No Progress">No Progress</option>
                        <option value="In Progres">In Progress</option>
                        <option value="Complate">Complete</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="inputEmail4" class="form-label">Priority</label>
                      <select name="priority" class="form-control">
                        <option value="low">low</option>
                        <option value="medium">medium</option>
                        <option value="high">high</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3 mt-5">
                  <div class="col">
                    <label for="exampleInputText1" class="form-label">Milestone</label>
                    <input type="text" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="col">
                    <label for="exampleInputText1" class="form-label">File</label>
                    <input type="file" name="#" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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