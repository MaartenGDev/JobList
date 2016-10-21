@extends('layouts.app')

@section('content')
    <div class="container card register-form">
        <h3>Register</h3>
        <form method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <p>Name</p>
            <input id="name" type="text" class="form-control" name="name"
                   value="{{ old('name') }}" required autofocus>

            <p>Email</p>
            <input id="email" type="email" class="form-control" name="email"
                   value="{{ old('email') }}" required>

            <p>Password</p>
            <input id="password-confirm" type="password" class="form-control"
                   name="password_confirmation" required>

            <p>Confirm Password</p>
            <input id="password" type="password" class="form-control" name="password" required>

            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </form>
    </div>
@endsection
