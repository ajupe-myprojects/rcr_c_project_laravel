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
        <li> <a href="{{route('books.index')}}">Book List</a></li>
        <li> <a href="{{route('books.create')}}">Add Book</a></li>
    </ul>
    @if(session()->has('status'))
        <p class="message">
            {{session()->get('status')}}
        </p>
    @endif
    @yield('content')
</body>
</html>
