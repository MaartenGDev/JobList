<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav>
        <ul>
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
            <li><a class="{{ Request::is('jobs') ? 'active' : '' }}" href="{{ url('/jobs') }}">Jobs</a></li>
            <li><a class="{{ Request::is('jobs/create') ? 'active' : '' }}" href="{{ url('/jobs/create') }}">Create Job</a></li>

            @if (Auth::guest())
                <li class="nav-right"><a class="{{ Request::is('/register') ? 'active' : '' }}" href="{{ url('/register') }}">Register</a></li>
                <li class="nav-right"><a class="{{ Request::is('/login') ? 'active' : '' }}" href="{{ url('/login') }}">Login</a></li>
            @else
                <li class="nav-right nav-right-last">
                    <a href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-right">
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </li>
        </ul>
        @endif
    </nav>

    @if (count($errors) > 0 || Session::has('status'))
        <div class="container flash-message-card">
            @if (isset($errors) && count($errors) > 0)
                <div class="flash flash-error">
                    <strong>Something went wrong!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><b>{{ $error }}</b></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('status') > 0)
                <div class="flash flash-success">
                    <p><b>{{Session::get('status')}}</b></p>
                </div>
            @endif
        </div>
    @endif

    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
