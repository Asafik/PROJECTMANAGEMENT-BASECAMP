@extends('project.SearchProject')
<nav class="navbar navbar-expand-lg navbar-light bg-light">&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="container px-lg-0 m-1">
        <a class="navbar-brand" href="/project">
            <li class="nav-item"><a class="nav-link"></a></li>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #254576;height: 29px;   margin-top: 3px; border-radius: nullpx; Font-family: Poppins; Font-style: Medium; Font-size: 26px; Line-height: 45px; Line-height: 0%; Align: Left;  Letter-spacing: -4%;">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="9" r="9" fill="#FEA21F">
                        </svg>&nbsp;&nbsp;&nbsp;Project ABCD&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                    <ul class="dropdown-menu dropdown-menu-" aria-labelledby="navbarDarkDropdownMenuLink"
                        style="width:100%">
                        <li><a class="dropdown-item" href="#"> Project DEFG</a></li>
                        <li><a class="dropdown-item" href="#"> Project DEFG</a></li>
                        <li><a class="dropdown-item" href="#"> Project DEFG</a></li>
                    </ul>
                </li>
            </ul>
            </li>
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
                <li class="nav-item"><a class="nav-link active" href="/calendar"><i class="bi bi-calendar"
                            style="font-size:28px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/timeboard"><i class="bi bi-clock"
                            style="font-size:28px"></i></i></a></li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-10 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" data-bs-toggle="modal"
                    data-bs-target="#SearchOpd"><i class="bi bi-search" style="font-size:24px"></i></a>
            </li>
                {{-- <li class="nav-item"><a class="nav-link active" href="/sidebar"><i class="bi bi-plus-circle"
                            style="font-size:24px"></i></a></li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="bi bi-bookmark"
                            style="font-size:24px"></i></a>
                    <ul class="dropdown-menu dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="bi bi-bookmark"></i> Bookmark this page
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="bi-plus-square-fill"><input type="text" class="form-control"
                                    placeholder="title"></input></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="bi bi-bookmark-star"></i> Notification</a>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link active" href="/notification"><i class="bi bi-bell"
                            style="font-size:24px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link active" href="/conversation"><i class="bi bi-chat-left-text"
                            style="font-size:24px"></i></i></a></li>
                <li class="nav-item"><a class="nav-link"></a></li>
                <ul class="navbar-nav" style="margin-top:1.5%">
                    <li class="nav-item dropdown">
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
                    </li>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<br>


<div class="area"></div>
<nav class="main-menu">
    <ul>
        <li>
            <a class="has-subnav" aria-current="page" data-bs-toggle="modal" data-bs-target="#SearchProject"><i
                    class="fa fa-search fa-2x p-3" style="font-size:24px"></i></a>
        </li>

        <li>
            <a class="has-subnav" href="/task_list"><i class="fa fa-check-circle fa-2x p-3"
                    style="font-size:24px"></i></a>
        </li>
        <li>
            <a class="has-subnav" href="/discuss"><i class="fa fa-comment fa-2x p-3" style="font-size:24px"></i></a>
        </li>
        <li>
            <a class="has-subnav" href="/milestoneproject"><i class="fa fa-flag fa-2x p-3"
                    style="font-size:24px"></i></a>
        </li>
        <li>
            <a class="has-subnav" href="/timeboardproject"><i class="fa fa-clock-o fa-2x p-3"
                    style="font-size:24px"></i></a>
        </li>
        <li>
            <a class="has-subnav" href="/full-calender"><i class="fa fa-calendar-o  fa-2x p-3"
                style="font-size:24px"></i></a>
        </li>
        <li>
            <a class="has-subnav" href="/projectfile"><i class="fa fa-file-text-o fa-2x p-3 text-center"
                    style="font-size:24px"></i></a>
        </li>
    </ul>
</nav>

<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);





.fa {
    position: relative;
    display: table-cell;
    width: 60px;
    height: 36px;
    text-align: center;
    vertical-align: middle;
    font-size: 20px;
}

.main-menu {
    background: #254576;
    border-right: 1px solid #e5e5e5;
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left: -2px;
    width: 60px;
    overflow: hidden;
    -webkit-transition: width .05s linear;
    transition: width .05s linear;
    -webkit-transform: translateZ(0) scale(1, 1);
    z-index: 1000;
}

.main-menu>ul {
    margin: 28px 0;
}



.main-menu li>a {
    position: relative;
    display: table;
    border-collapse: collapse;
    border-spacing: 0;
    color: #ffff;
    font-family: arial;
    text-decoration: none;

}

.main-menu .nav-icon {
    position: relative;
    display: table-cell;
    width: 60px;
    height: 36px;
    text-align: center;

    font-size: 18px;
}

nav ul,
nav li {
    outline: 0;
    margin-bottom: 10px;
    padding: 0;
    list-style: none;
}

.main-menu li:hover>a,
nav.main-menu li.active>a,
.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus,
.dropdown-menu>.active>a,
.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus,
.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
.dashboard-page nav.dashboard-menu ul li.active a {
    color: #fff;
    background-color: #5fa2db;
}
</style>