@extends('layout')

@section('content')
    <main class="content-main">
        <h3>Register an Account</h3>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="formfield">
                <label for="name">Username
                    @if($errors->has('name'))
                        <span class="ital-red"> * {{ $errors->first('name') }}</span>
                    @endif
                </label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="{{ $errors->has('name') ? 'error' : ''}}">
            </div>

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
                <label for="password_confirmation"> Retype Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required >
            </div>

            <div class="formfield">
                <button class="form-button">Register</button>
            </div>
        </form>
    </main>
@endsection('content')
