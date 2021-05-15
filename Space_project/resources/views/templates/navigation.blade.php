<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('menu') }}">Menu</a></li>
            <li><a href="{{ url('history') }}">History</a></li>
        </ul>
        <ul>
        <li><a href="{{ url('home') }}">Login/Register</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
    
    @yield('script')
</body>
</html>