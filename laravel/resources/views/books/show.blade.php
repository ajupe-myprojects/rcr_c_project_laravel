@extends('layout')

@section('content')
    <main class="content-main">
        @empty($book)
            <p>No book found!</p>
        @endempty
        <h3>
            {{$book->title}}
        </h3>
        <p>
            Added: {{ $book->created_at->diffForHumans() }}
        </p>
        @if ((new Carbon\Carbon())->diffInMinutes($book->created_at) < 5)
            New Post
        @else
            Post from the Stoneage
        @endif
    </main>

@endsection('content')
