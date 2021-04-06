<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Neatore') }}</title>
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    @extends('plantilla.plantilla')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm navbar-dark cabecera">
            <div class="container">
                <a style="color: #ebecea; font-size:150%" class="navbar-brand" href="{{ url('/') }}">
                    <strong>Neatore</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i style="color: #ebecea" class="fas fa-hamburger"></i>
                    </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <a style="color: #ebecea;  font-size: 110%;" class="nav-link active" aria-current="page" href="{{ url('/login') }}">Iniciar sesión</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a style="color: #ebecea;  font-size: 110%" class="nav-link active" aria-current="page" href="{{ url('/register') }}">Registrarse</a>
                    </ul>
                    <ul class="navbar-nav">
                        
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
