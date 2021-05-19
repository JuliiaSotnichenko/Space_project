<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bop/bopTemplateStyle.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <div>
        <img src="" alt="">
    </div>
    <div>
        <ul>
            <li><a href="/admin/users">Users</a></li>
            <li><a href="/admin/bookings">Bookings</a></li>
            <li><a href="/admin/flights">Flights</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>