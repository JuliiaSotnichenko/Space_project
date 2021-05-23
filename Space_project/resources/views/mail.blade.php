<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/') }}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>