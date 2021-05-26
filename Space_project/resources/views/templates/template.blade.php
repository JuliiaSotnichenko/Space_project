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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->
  <!-- Link CSS -->
  <link href="/css/main.css" rel="stylesheet">

  @yield('style')
</head>

<body>
  <main>
  <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">Logo</a>
    </div>
    <nav>
    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
    <ul class="nav-list">
    <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About us</a></li>
        <li><a href="{{ url('/bookform') }}">Packages</a></li>
       

        @if(Auth::check())

        <li><a href="{{ url('dashboard') }}">Account</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
        @else
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif
        <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a> -->
      </ul>
    </nav>
  </div>
</section>



    <!-- <nav class="main__navig">
      <div class="logo_nav"> 
      <a href="{{ url('/') }}">
        <img class="logo" src="/images/logo/logoSmall.png" alt="Starlight logo">
      </a>
      </div>
     
      <ul class="main__navig_list">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About us</a></li>
        <li><a href="{{ url('/bookform') }}">Packages</a></li>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
      

        @if(Auth::check())

        <li><a href="{{ url('dashboard') }}">Account</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
        @else
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif
      </ul>
    </nav> -->

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

  </footer>


    @yield('script')

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'>
    </script>

    <!-- CDN JQuery -->
 <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script>
    (function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery

    </script>
</body>

</html>