@extends('layout')

@section('content')
    @forelse ($books as $book)
        <p>
        <h3><a href="{{ route('books.show', ['book' => $book->id])}}">{{ $book->title}}</a></h3><br>
            {{$book->author}} <br>
        </p>
    @empty
        <p>No Books yet</p>

    @endforelse
@endsection('content')
