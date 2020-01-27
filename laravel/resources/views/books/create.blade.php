@extends('layout')

@section('content')
    <div class="form-container">
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            <div class="formfield">
                <label for="title">Title </label>
                <input type="text" name="title" id="title" value="{{old('title')}}">
            </div>
            <div class="formfield">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="{{old('author')}}">
            </div>
            <div class="formfield">
                <label for="description">Description</label>
                <textarea cols="30" rows="10" name="description" id="description">{{old('description')}}</textarea>
            </div>
            <div class="formfield">
                <label for="isbn">ISBN-13</label>
                <input type="text" name="isbn" id="isbn" value="{{old('isbn')}}">
            </div>
            <div class="formfield">
                <button type="submit">Submit</button>
            </div>
            @if($errors->any())
                <div class="formfield">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection('content')
