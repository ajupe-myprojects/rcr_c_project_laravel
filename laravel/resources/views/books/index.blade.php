@extends('layout')

@section('content')
    <main class="content-main">
        @forelse ($books as $book)
            <p>
            <h3><a href="{{route('books.show', ['book' => $book->id])}}">{{ $book->title}}</a></h3><br>
                {{$book->author}} <br>
            </p>
            <div class="formfield-center">
                <form action=" {{route('books.destroy', ['book' => $book->id])}} " method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete Book" class="form-button">
                </form>
                <a href="{{route('books.edit', ['book' => $book->id])}}" class="link-button">Edit</a>
            </div>
        @empty
            <p>No Books yet</p>

        @endforelse
    </main>
@endsection('content')
