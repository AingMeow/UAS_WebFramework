<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UMKM Bookkeeping')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">UMKM</a>
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            @else
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">@csrf<button class="btn btn-link">Logout</button>
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>