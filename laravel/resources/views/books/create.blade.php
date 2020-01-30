@extends('layout')

@section('content')
    <main class="content-main">
        <div class="form-container">
            <form action="{{route('books.store')}}" method="POST">
                @csrf
                @include('books._form')
                <div class="formfield">
                    <button type="submit" class="form-button">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection('content')
