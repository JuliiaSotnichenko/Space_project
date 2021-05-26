<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Link for Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
  <!-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->
  <!-- Link CSS -->
  <link href="/css/main.css" rel="stylesheet">

  @yield('style')
</head>

<body>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mynav">
      <div class="container-fluid mynav2">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class="logo" src="/images/logo/logoSmall.png" alt="Starlight logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/bookform') }}">Packages</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('logout') }}">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
            </li>
            @endif

          </ul>
        </div>
      </div>
    </nav>


    <div class="content_template">
      @yield('content')
    </div>

    <div class="content2">
      @yield('content2')

    </div>
    <div class="content3">
      @yield('content3')

    </div>
  </main>


  <!-- Footer -->
  <footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div id="menu_footer" class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="about font-weight-bold text-uppercase mb-4">About</h5>
          <ul class="list-unstyled">
            <li>
              <p>
                <a href="{{ url('/') }}">Home</a>
              </p>
            </li>
            <li>
              <p>
                <a href="{{ url('/about') }}">About us</a>
              </p>
            </li>
            <li>
              <p>
                <a href="{{ url('/bookform') }}">Packages</a>
              </p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <i class="fas fa-home mr-3"></i> Luxembourg, 2121
              </p>
            </li>
            <li>
              <p>
                <i class="fas fa-envelope mr-3"></i>cj.finalfrontier@gmail.com
              </p>
            </li>
            <li>
              <p>
                <i class="fas fa-phone mr-3"></i>+352 691 280 118
              </p>
            </li>
            <li>
              <p>
                <i class="fas fa-print mr-3"></i>+352 691 280 119
              </p>
            </li>
          </ul>


        </div>

        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

          <!-- Facebook -->
          <a type="button" class="btn-floating btn-fb">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!-- Twitter -->
          <a type="button" class="btn-floating btn-tw">
            <i class="fab fa-twitter"></i>
          </a>
          <!-- Google +-->
          <a type="button" class="btn-floating btn-gplus">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </div>
        <!-- Grid column -->

      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Copyright © 2021 Spacetravel agency</div>
    <hr class="clearfix w-100 d-md-none">


    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'>
    </script> -->
</body>

</html>