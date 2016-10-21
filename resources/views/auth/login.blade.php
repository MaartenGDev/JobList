@extends('layouts.app')

@section('content')
    <div class="container card">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <p>Email</p>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                   autofocus>

            <p>Password</p>
            <input id="password" type="password" class="form-control" name="password" required>


            <p><input type="checkbox" name="remember"> Remember Me</p>

            <button type="submit" class="btn btn-primary">
                Login
            </button>

            <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </form>
    </div>
@endsection
