<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<<<<<<< Updated upstream:Space_project/resources/views/BackOffice/bop-template.php
<nav class="navbar navbar-expand-lg navbar-light bg-light">
=======


<nav class="navbar navbar-dark bg-dark">
>>>>>>> Stashed changes:Space_project/resources/views/BackOffice/bop-template.blade.php
  <div class="container-fluid">
    <img src="public/images/logo/logoSmall.png" alt="">
    <a class="navbar-brand" href="/admin">StarFlight</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
<<<<<<< Updated upstream:Space_project/resources/views/BackOffice/bop-template.php
          <a class="nav-link active" aria-current="page" href="#">Users</a>
=======
          <a class="nav-link active" aria-current="page" href="/admin">Users</a>
>>>>>>> Stashed changes:Space_project/resources/views/BackOffice/bop-template.blade.php
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bookings</a>
        </li>
        <li class="nav-item">
<<<<<<< Updated upstream:Space_project/resources/views/BackOffice/bop-template.php
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Flights</a>
=======
          <a class="nav-link" href="/allflights">Flights</a>
>>>>>>> Stashed changes:Space_project/resources/views/BackOffice/bop-template.blade.php
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<<<<<<< Updated upstream:Space_project/resources/views/BackOffice/bop-template.php
<section>
    <article>
        <label for="search">Search</label>
        <input type="text" name="search">
        <br>
    </article>
@yield('content')
    
=======

  @yield('content')

  @yield('footer-backend')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


>>>>>>> Stashed changes:Space_project/resources/views/BackOffice/bop-template.blade.php
</body>
</html>