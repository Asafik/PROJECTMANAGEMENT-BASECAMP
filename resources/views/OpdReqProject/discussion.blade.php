@extends('layout.masterReq') @section('content')
<!-- Page Content-->
<section class="pt-3">
    <div class="container px-lg-0">
        <!-- Page Features-->
        <div class="col-lg-12 mb-5 d-flex">
            <span class="h7 text-decoration-none  fw-bold me-2 text-secondary btn btn-"><i class="bi bi-funnel-fill"
                    style="color: #57575A;"></i> Filter</span>
            <a class="h7 text-decoration-none fw-bold text-secondary me-auto btn"><img src="images/Foldersearch.svg"
                    style="width: 13%; margin-top: -5%;color: #57575A"> Saved Searches</a>

            <a class="h4 text-decoration-none text-black" href=""><i class="bi bi-gear" style="color: #838492;"></i></a>
        </div>
        <p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Project System Attandance
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">

                    <table class="table  ">
                        <thead style="background-color: #fff;">
                            <tr style="color: #625C5C;">
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col">Last Activity</th>
                                <th scope="col">Comments</th>
                            </tr>

                            <tr style="background-color: #EAF0FF;">
                                <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></i></th>
                                <td>Database</td>
                                <td>May 10, 2022 08:58pm
                                    by Risma</td>
                                <td><img src="images/comment.svg" height="30">0</td>
                            </tr>
                            <tr style="background-color: #EAF0FF;">
                                <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></th>
                                <td>Framework Laravel</td>
                                <td>May 15, 2022 08:58pm
                                    by Herlina</td>
                                <td><img src="images/comment.svg" height="30">1</td>
                            </tr>
                            <tr style="background-color: #EAF0FF;">
                                <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></th>
                                <td>Alur Website</td>
                                <td>May 20, 2022 08:58pm
                                    by Satya</td>

                                <td><img src="images/comment.svg" height="30">1</td>
                            </tr>
                            </tbody>
                    </table>


                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Project System Attandance

                        </button>

                    </h2>

                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">


                        <table class="table  ">
                            <thead style="background-color: #fff;">
                                <tr style="color: #625C5C;">
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Last Activity</th>
                                    <th scope="col">Comments</th>
                                </tr>

                                <tr style="background-color: #EAF0FF;">
                                    <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></i></th>
                                    <td>Database</td>
                                    <td>May 10, 2022 08:58pm
                                        by Risma</td>
                                    <td><img src="images/comment.svg" height="30">0</td>
                                </tr>
                                <tr style="background-color: #EAF0FF;">
                                    <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></th>
                                    <td>Framework Laravel</td>
                                    <td>May 15, 2022 08:58pm
                                        by Herlina</td>
                                    <td><img src="images/comment.svg" height="30">1</td>
                                </tr>
                                <tr style="background-color: #EAF0FF;">
                                    <th scope="row"><i class="bi bi-star-fill" style="color: #FFCE31;"></th>
                                    <td>Alur Website</td>
                                    <td>May 20, 2022 08:58pm
                                        by Satya</td>

                                    <td><img src="images/comment.svg" height="30">1</td>
                                </tr>
                                </tbody>
                        </table>

                        </a>
                    </div></strong>
                </div>
            </div>
        </div>
        </p>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection