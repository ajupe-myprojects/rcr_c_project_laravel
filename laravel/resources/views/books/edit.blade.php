@extends('layout')

@section('content')
    <div class="form-container">
        <form action="{{route('books.update', ['book' => $book->id])}}" method="POST">
            @csrf
            @method('PUT')
            @include('books._form')
            <div class="formfield">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection('content')
