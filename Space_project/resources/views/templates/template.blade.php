<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Link for Bootstrap -->
    https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css

    <!-- Link CSS -->
    <link href="/css/main.css" rel="stylesheet">

    @yield('style')
</head>

<body>
    <main>
        <nav class="main__navig">

            <img class="logo" src="/images/logoSF.svg" alt="Starlight logo">
            <ul class="main__navig_list">
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('menu') }}">Menu</a></li>
                <li><a href="{{ url('about us') }}">About us</a></li>
                <li><a href="{{ url('history') }}">History</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <ul> @if(Auth::check())

                <li><a href="{{ url('dashboard') }}">Account</a></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
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
        <div id="copyright text-right">© Copyright 2021 </div>
    </footer>

    @yield('script')

    <script>
        <link href="https: //cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js">
    </script>

</body>


</html>