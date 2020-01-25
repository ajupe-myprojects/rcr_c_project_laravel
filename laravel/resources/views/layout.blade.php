<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
</head>
<body>
    <ul>
        <li> <a href="{{route('home')}}">Home</a></li>
        <li> <a href="{{route('list')}}">Liste</a></li>
        <li><a href="{{route('post', ['post_id' => 1])}}">Post1</a></li>
        <li><a href="{{route('post', ['post_id' => 2])}}">Post2</a></li>

    </ul>
    @yield('content')
</body>
</html>