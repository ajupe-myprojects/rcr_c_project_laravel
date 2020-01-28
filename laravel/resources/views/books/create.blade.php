@extends('layout')

@section('content')
    <div class="form-container">
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            @include('books._form')
            <div class="formfield">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection('content')
