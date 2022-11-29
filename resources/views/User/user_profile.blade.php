@extends('layout.master') @section('content')
    
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex"> 
            <p class="bi bi-funnel h5 text-decoration-none text-secondary me-auto"> Filter</p>
            <!-- button modal new project -->
            <button type="button" style="background-color:#20B15A ;" class="bi bi-plus-circle btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@New project">  New project</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            </div>
        </div>
    <!-- Page Content-->
    <section class="pt-4">
        <h3>
            User Profile
        </h3>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    @endsection