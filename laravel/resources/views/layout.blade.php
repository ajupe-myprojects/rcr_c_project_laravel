<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style_global.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style_pages.css') }}"/>
</head>
<body>
    <div class="wrapper">
        <nav class="top-nav j-green">
            <div class="nav-container clear">
            <h1 class="home orange-text ">SciFi- und Fantasy Bücherforum</h1>
            <ul class="nav-bar">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li> <a href="{{route('contact')}}">Contact</a></li>
                <li> <a href="{{route('books.index')}}">Book List</a></li>
                <li> <a href="{{route('books.create')}}">Add Book</a></li>
                @guest
                    <li><a href=" {{ route('register') }} ">Register</a></li>
                    <li><a href=" {{ route('login') }} ">Login</a></li>
                @else
                    <li><a href=" {{ route('logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a></li>
                    <form action="{{ route('logout') }} " method="post" id="logout-form" style="display:none;">
                        @csrf
                    </form>
                @endguest
            </ul>
            </div>
        </nav>
        @if(session()->has('status'))
            <p class="message">
                {{session()->get('status')}}
            </p>
        @endif
        @yield('content')
    </div>
</body>
</html>
