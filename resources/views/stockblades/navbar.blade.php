<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Navbar') }}</title>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @extends('plantilla.plantilla')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm navbar-dark cabecera">
            <div class="container">
                <a style="color: #ebecea; font-size:150%" class="navbar-brand" href="{{ url('/stock') }}">
                    <strong>Neatore</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span style="padding-top: 20%"><i style="color: #ebecea" class="fas fa-hamburger"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto">
                        <a style="color: #ebecea;  font-size: 110%" class="navbar-brand enlaces_paginas" href="{{ url('/stock') }}"><i class="fas fa-cubes"></i> Stock</a>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <a style="color: #ebecea; font-size: 110%" class="navbar-brand enlaces_paginas" href="{{ url('/escaner') }}"><i class="fas fa-barcode"></i> Escaner</a>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a style="color: #ebecea;" id="navbarDropdown" class="nav-link desplegable" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <i class="far fa-arrow-alt-circle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>