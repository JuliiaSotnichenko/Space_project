<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://cesiumjs.org/releases/1.79.1/Build/Cesium/Cesium.js"></script>
  <link href="https://cesiumjs.org/releases/1.79.1/Build/Cesium/Widgets/widgets.css" rel="stylesheet">

    @yield('style')
</head>
<body>
    <main>
        <nav class="main__navig">
          <img class="logo" src="/images/logoSF.svg" alt="Starlight logo">
        <ul class="main__navig_list">
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('about us') }}">About us</a></li>
            <li><a href="{{ url('packages') }}">Packages offer</a></li>
            <li><a href="{{ url('booking') }}">Booking</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <ul>
            <li><a href="{{ url('home') }}">Login/Register</a></li>
        </ul>
        </nav>

    <div class="content">
        @yield('content')
    </div>

    <div class="content2">
        @yield('content2')

    </div>
</main>

    <footer>
    <div id="copyright text-right">© 2021 Spacetravel agency</div>
    </footer>

    @yield('script')



</body>
</html>
