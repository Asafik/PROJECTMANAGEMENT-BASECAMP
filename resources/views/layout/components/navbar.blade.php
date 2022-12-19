@extends('OpdReqProject.SearchingOpd')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-lg-0">
        <a class="navbar-brand" href="/project">
            <h3 class="navbar-brand"><img src="images/icon1.svg" height="43" alt="logo" /></h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="Page navigation example navbar-nav ms-auto mb-10 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="/project"><i class="bi bi-house"
                            style="font-size:28px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/general_project"><i class="bi bi-grid"
                            style="font-size:28px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/project_list"><i class="bi bi-clipboard-check"
                            style="font-size:28px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/milestone"><i class="bi bi-flag"
                            style="font-size:28px"></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/calendar"><i class="bi bi-calendar3"
                            style="font-size:28px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/timeboard"><i class="bi bi-clock"
                <li class="nav-item"><a class="nav-link active" href="/timeboardOpd"><i class="bi bi-clock"
                            style="font-size:28px"></i></i></a></li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-10 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="bi bi-search"
                            style="font-size:24px"></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-plus-circle"
                            style="font-size:24px"></i></a></li>
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="/bookmark">
                 <li class="nav-item"><a class="nav-link active" aria-current="page" data-bs-toggle="modal"
                        data-bs-target="#SearchOpd"><i class="bi bi-search" style="font-size:24px"></i></a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-plus-circle"
                            style="font-size:24px"></i></a></li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">   
                
                        <i class="bi bi-bookmark" style="font-size:24px"></i>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="/notification"><i class="bi bi-bell"
                            style="font-size:24px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/conversation"><i class="bi bi-chat-left-text"
                            style="font-size:24px"></i></i></a></li>
                {{-- <li class="nav-item"><a class="nav-link active" href="/user_profile"><i class="bi bi-person" style="font-size:24px"></i></a></li> --}}

                <div class="dropdown">

                    <a class="nav-link active dropdown-toggle" href="/bookmark" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-bookmark" style="font-size:24px"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bookmark this page</a></li>
                    </ul>
                </div>
                <li class="nav-item"><a class="nav-link active" href="/notification"><i class="bi bi-bell"
                            style="font-size:24px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/conversation"><i class="bi bi-chat-left-text"
                            style="font-size:24px"></i></i></a></li>


                <li class="nav-item"><a class="nav-link"></a></li>
                    <ul class="navbar-nav" style="margin-top:1.5%">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="margin-left:10%">yourname &nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink" style="width:1%">
                                <li><a class="dropdown-item" href="/user_profile"><i class="bi bi-person-square"></i> My Account</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Manage System</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="/home"><i class="bi bi-box-arrow-left"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <div class="nav-item dropdown">
                    
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/" class="dropdown-item">Blog Grid</a>
                        <a href="/" class="dropdown-item">Blog Detail</a>
                    </div>
                </div> --}}

                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                        style="font-size:20px">{{ auth()->user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/user_profile"><i class="bi bi-person"></i> My Account</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</nav>
<br>