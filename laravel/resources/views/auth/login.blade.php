@extends('layout')

@section('content')
<main class="content-main">
    <h3>Register an Account</h3>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="formfield">
            <label for="email">Email
                @if($errors->has('email'))
                    <span class="ital-red"> * {{ $errors->first('email') }}</span>
                @endif
            </label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="{{ $errors->has('email') ? 'error' : ''}}">
        </div>

        <div class="formfield">
            <label for="password">Password
                @if($errors->has('password'))
                    <span class="ital-red"> * {{ $errors->first('password') }}</span>
                @endif
            </label>
            <input type="password" name="password" id="password" required class="{{ $errors->has('password') ? 'error' : ''}}">
        </div>

        <div class="formfield">
            <button class="form-button">Login</button>
        </div>
    </form>
</main>
@endsection('content')
