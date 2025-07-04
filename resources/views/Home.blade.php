<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>This Custom Hone Page</h1>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('user', ['id'=> 1, 'slug'=>'welcome']) }}">User</a>
</body>
</html>
