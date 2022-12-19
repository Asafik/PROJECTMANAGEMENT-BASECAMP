@extends('layout.master') @section('content')
<!-- Page Content-->
<section class="pt-4">
    <div class="container">
        <!-- Page Features-->
        <div class="row ">
            <div class="col-lg-12 mb-4 d-flex">
                <!-- offcanvas filter -->
                <p class="i bi-funnel h5 text-decoration-none text-secondary fw-bold btn" type="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> Filter</p>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><h5 style="margin-left: 190%; margin-top: -30%;"> Filter</button>
                    </div>
                    <hr style="border-color:black;">
                    <div class="offcanvas-body">
                        <form>
                            <div class="row mb-2">
                            <label for="inputProjectGroup" class="col-sm-3 col-form-label fs-7">Search Text</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example"><i class="bi bi-plus-circle-fill"></i>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Project Name</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Project Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                            </div>
                        </form>
                </div>
                </div>
                <!-- popover saved searches & group by -->
                <p class="bi bi-folder-fill h5 text-decoration-none text-secondary fw-bold btn me-auto btn" data-bs-container="body" data-bs-toggle="popover"  title="Popover title" data-bs-placement="bottom" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                Saved Searches</p>
                
                <!-- button add task -->
                <button class="bi bi-plus-circle btn btn-success me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"> Add List</button>
                <button class="bi bi-plus-circle btn btn-success me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"> Add Task</button>
                <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear"></i></a>
            </div>

            <!--table -->
            <div class="mb-5">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <div class=" h5 text-decoration-none text-secondary fw-bold btn bi bi-chevron-compact-down" style="background-color:  #D0D9EE;" type="" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Project System Atandance
                        </div>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <table class="w3-table-all w3-hoverable">
                        <thead>
                          <tr class="w3-light">
                            <th>Title</th>
                            <th>Last Activity</th>
                            <th>Comments</th>
                          </tr>
                        </thead>
                        <tr class="" style="background-color: #fff;">
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>Eve</td>
                          <td>Jackson</td>
                          <td>94</td>
                        </tr>
                        <tr>
                          <td>Adam</td>
                          <td>Johnson</td>
                          <td>67</td>
                        </tr>
                      </table>
                  </div>
                </div>
            </div>

              <!--table -->
              <div class="mb-5">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <div class=" h5 text-decoration-none text-secondary fw-bold btn bi bi-chevron-compact-down" style="background-color:  #D0D9EE;" type="" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Project System Atandance
                  </div>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              <table class="w3-table-all w3-hoverable">
                  <thead>
                    <tr class="w3-light">
                      <th>Title</th>
                      <th>Last Activity</th>
                      <th>Comments</th>
                    </tr>
                  </thead>
                  <tr class="" style="background-color: #fff;">
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Adam</td>
                    <td>Johnson</td>
                    <td>67</td>
                  </tr>
                </table>
            </div>
          </div>
        </div>


    <style>
        body {
                            
        background-color:#D0D9EE;
            background-size: 160% 140%;
                }
                </style>
</section>
@endsection
{{-- <!-- Bootstrap core JS Popover -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script> --}}

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) 
{
return new bootstrap.Popover(popoverTriggerEl);
});
</script>