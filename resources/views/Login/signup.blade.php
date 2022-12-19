<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Sign Up | BaseCamp</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="images/icon.png" />
      <!-- Bootstrap icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body style="background-color: #fff;">
      <!-- Responsive navbar-->
      <nav class="navbar navbar-expand-lg navbar-light sticky top bg-light" data-navbar-on-scroll="data-navbar-on-scroll" style="background-image : none; background-color: rgba(249, 250, 253, 0); transition: background-color 0s ease 0s, padding 0.35s ease 0s;">
        <div class="container px-lg-0">
          <a class="navbar-brand" href="/"><h3 class="navbar-brand"><img src="img/logospbe.svg" height="60" alt="logo" style="width: 100%;"></h3></a></div></nav>
      <!--Content-->
      <form action="/signup" method="POST">
        @csrf
        <div class="text-center" style="color: #57575A;">
          <h1>Sign Up</h1>
        </div>
        <div>
          <input class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" placeholder="Nama" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 2%;" name="name" id="name" required value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 2%;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div>
          <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" placeholder="Email" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 1%;" name="email" id="email" required value="{{ old('email') }}">
          @error('email')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 1%;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div>
          <input class="form-control form-control-lg @error('phone') is-invalid @enderror" type="text" placeholder="Phone" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 1%;" name="phone" id="phone" required value="{{ old('phone') }}">
          @error('phone')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 1%;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div>
          <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" placeholder="Password" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 1%;" name="password" id="password" required>
          @error('password')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 1%;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div>
          <input class="form-control form-control-lg @error('confirm_password') is-invalid @enderror" type="password" placeholder="Confirm Password" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 1%;" name="confirm_password" id="confirm_password" required>
          @error('confirm_password')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 1%;">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div>
          <input class="form-control form-control-lg @error('nik') is-invalid @enderror" type="text" placeholder="NIK" aria-label=".form-control-lg example" style="width: 35%; margin-left: 33%; margin-top: 1%;" name="nik" id="nik" required value="{{ old('nik') }}">
          @error('nik')
          <div class="invalid-feedback" style="width: 35%; margin-left: 33%; margin-top: 1%;">
            {{ $message }}
          </div>
          @enderror
          <button class="btn btn-primary btn-lg fw-bold" type="submit" style="width: 35%; margin-left: 33%; margin-top: 2%; background-color: #0064AF;"><span class=""style="color: #fff;">Sign Up</button>
        </div>
      
        <div class="d-grid gap-2 col-6 mx-auto">
          <div style="margin-left: 28%; margin-top: 3%;"></div>
          <span class="text-center"><img src="img/Line 1.svg"  style=" width: 30%; height: 3px;">
            <span class="text-center">or sign up with<img src="img/Line 1.svg"  style=" width: 30%; height: 3px;"></span>
          </span>

          <div class="text-center">
            <a class="btn btn-outline shadow-4 border-1 ms-3 square-pill" href="#!">
              <img src="img/google.svg" alt="" width="50" height="24">
            </a>
            <a class="btn btn-outline ms-3" href="#!">
              <img src="img/fb.svg" alt="" width="70" height="24">
            </a>
          </div>
          <p class="text-center" style="margin-top: 2%; color: #57575A;">Already have an account? <a href="/login">Login</a></p>
        </div>
      </form>
{{--         
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script> --}}
  </body>
</html>

