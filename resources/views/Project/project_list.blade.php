@extends('layout.master') @section('content')

<!-- Page Content-->
<section class="pt-4">
    <div class="container ">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-5 d-flex"> 

                <a class="bi bi-funnel h5 text-decoration-none text-secondary me-3"> Filter</a>
                <a class="bi bi-folder-fill h5 text-decoration-none text-secondary me-3"> Saved Searches</a>
                <a class="bi bi-stack h5 text-decoration-none text-secondary me-auto"></i> Group by</a>
                <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle "></i> Add List</button>
                <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModalAddtask"><i class="bi bi-plus-circle "></i> Add Task</button>
                <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear"></i></a>
            </div> 
            <div class="col-lg-12 col-xxl-6 mb-3">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body fs-6 text-sm-start p-8 p-lg-2 pt-0 pt-lg-0">
                        <div style="width:1100px;" class="btn bg-primary bg-gradient rounded-3 mb-3 mt-n3 text-start"><a href=""><span class="text-white"><strong>ui/ux desain</strong></a></i></div>
                            @foreach ($project_tasks as $project_tasks)
                            <ul>
                                <li >{{$project_tasks -> title_task }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <a class="h5 text-decoration-none text-secondary mb-5" href=""><i class="bi bi-plus-circle"></i> add task</a>
            @endforeach 
  <!-- Modal Add List -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tile </label>
                        <input type="text" name="tile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
  <div class="modal fade" id="exampleModalAddtask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
           <div class="container">
            <form action="/store" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tile </label>
                    <input type="text" name="title_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea type="text" name="description_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                  </div> 
                  <div class="mb3">
                  </div>
        </div> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
      </div>
    </div>
  </div>
</section>
@endsection