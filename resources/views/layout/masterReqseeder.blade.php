<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home | BaseCamp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/suri.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
            body {font-family: "Lato", sans-serif;}
            .sidebar {
              height: 100%;
              width: 70px;
              position:fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #254576;
              overflow-x:hidden;
              padding-top: 16px;
            }
            
            .sidebar a {
              padding: 6px 8px 6px 16px;
              text-decoration: none;
              font-size: 30px;
              color: #fff;
              display: block;
            }
            
            .sidebar a:hover {
              color: #f1f1f1;
            }
            
            .main {
              margin-left: 160px; /* Same as the width of the sidenav */
              padding: 0px 10px;
            }
            
            @media screen and (max-height: 450px) {
              .sidebar {padding-top: 15px;}
              .sidebar a {font-size: 18px;}
            }
            /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
</style>
    </head>
    <body>
        @include('layout.components.navbarReq')

        @include('layout.components.seeder')

        <div class="mai">
        @yield('content')

        <style>
            body {
                                            
                background-color:#D0D9EE;
                   
                        }
                      </style>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </div>
    </body>
</html>
