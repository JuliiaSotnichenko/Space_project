<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <main>
        <nav class="main__navig">
          <img class="logo" src="" alt="Starlight logo">
        <ul class="main__navig_list">
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('menu') }}">Menu</a></li>
            <li><a href="{{ url('about us') }}">About us</a></li>
            <li><a href="{{ url('history') }}">History</a></li>
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
    <div id="copyright text-right">© Copyright 2021 </div>
    </footer>
    
    @yield('script')


   
</body>
</html>