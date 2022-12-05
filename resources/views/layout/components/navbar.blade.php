@extends('project.searching')
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
                            style="font-size:28px"></i></i></a></li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-10 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="bi bi-search"
                            style="font-size:24px"></i></a></li>
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
                <li class="nav-item"><a class="nav-link"></a></li>
                    <ul class="navbar-nav" style="margin-top:1.5%">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"data-bs-toggle="dropdown" aria-expanded="false" style="margin-left:10%">yourname&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink"
                                style="width:1%">
                                <li><a class="dropdown-item" href="/user_profile"><i class="bi bi-person-square"></i> My Account</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Manage System</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="/home"><i class="bi bi-box-arrow-left"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>


            </ul>
        </div>
    </div>
</nav>
<br>
