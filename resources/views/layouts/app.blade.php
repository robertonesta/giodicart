<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
            <!-- Left Side Of Navbar -->
            <a class="navbar-brand col-md-3 col-lg-2 mr-0" href="#">
                <div id="laravel_logo" class="w-75">
                    <img src="{{asset('/img/logo.png')}}" alt="" class="img-fluid">
                </div>
            </a>

            <!-- Right Side Of Navbar -->
            <div class="text-light ml-auto d-flex justify-content-center align-items-center gap-3">
                <!-- Authentication Links -->
                @guest
                    <div>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                @if (Route::has('register'))
                    <div>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
                @else
                    <div class="nav-item dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{('Home')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
