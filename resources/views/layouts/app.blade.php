<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-5 rounded-top-0 border-bottom border-5 border-warning shadow-sm position-fixed top-0 w-100 z-1">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img src="images/ecobiz.png" alt=""> --}}
                    <span class="fs-4 link-secondary">Eco<span class="link-warning">Biz</span></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <input type="text" class="form-control rounded-pill border border-warning focus-ring focus-ring-warning" placeholder="Search">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        

                        <li class="nav-item">
                            <a class="nav-link ms-3 {{ request()->is('#') ? 'active':''}}" href="#"><span class="material-symbols-outlined">shopping_cart</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-3 {{ request()->is('/') ? 'active':''}}" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-3 {{ request()->is('pembersihan') ? 'active':''}}" href="/pembersihan">Pembersihan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-3 {{ request()->is('penjualan') ? 'active':''}}" href="/penjualan">Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-3 {{ request()->is('pembelian') ? 'active':''}}" href="/pembelian">Pembelian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3 {{ request()->is('donasi') ? 'active':''}}" href="/donasi">Donasi</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link ms-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle {{ request()->is('riwayatpembersihan') ? 'active':''}}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('riwayatpembersihan') ? 'active':''}}" href="/riwayatpembersihan">Riwayat Pembersihan</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5" style="margin-top: 68px">
            @yield('content')
        </main>
    </div>
</body>
</html>
