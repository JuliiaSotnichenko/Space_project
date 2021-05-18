<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
</head>
<body>
@yield('nav')

@yield('content')
    <form action="" method="post">
        <input type="email" name="email" id="email">
    </form>
</body>
</html>