<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add style link -->
    <title>@yield('title')</title>
</head>
<body>
@yield('nav')

<article>
        <label for="search">Search</label>
        <input type="text" name="search">
        <br>
    </article>

@yield('content')

</body>
</html>
