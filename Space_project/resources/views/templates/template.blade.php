<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Link for Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->
    <!-- Link CSS -->
    <link href="/css/main.css" rel="stylesheet">

    @yield('style')
</head>

<body>
    <main>

        <nav class="main__navig">
            <a href="{{ url('/') }}">
                <img class="logo" src="/images/logoSF.svg" alt="Starlight logo">
            </a>
            <ul class="main__navig_list">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
                <li><a href="{{ url('/bookform') }}">Packages</a></li>
                <!-- <li><a href="{{ url('contact') }}">Contact</a></li> -->

                @if(Auth::check())

                <li><a href="{{ url('dashboard') }}">Account</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </nav>

        <div >
            @yield('content')
        </div>

        <div class="content2">
            @yield('content2')

        </div>
        <div class="content3">
            @yield('content3')

        </div>
    </main>

    <footer>
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

     

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="{{ url('/about') }}">ABOUT US</a>
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
              <i class="fas fa-home mr-3"></i> Luxembourg, 2121</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i>cj.finalfrontier@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i>+352 691 280 118</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i>+352 691 280 119</p>
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
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright © 2021 Spacetravel agency  
  </div>
  <!-- Copyright -->

        <!-- <div class="copyright-text" id="copyright text-right">Copyright © 20021 Spacetravel agency</div> -->
    </footer>

    @yield('script')

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'>
    </script>

</body>


</html>