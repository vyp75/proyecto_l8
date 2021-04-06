@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        
        <div class="col-md-6">
            <div  style="margin-bottom: -4%; margin-top: -4%" ><a href="{{ url('/') }}"><img style=" display:block; margin:auto; width: 30%;" class="logo" src="images/logo.png" alt="logo"></a></div>            
            <br>
            <div class="card">

                <div class="card-header" style="text-align: center; font-weight: bolder; background-color: #909090">{{ __('Iniciar sesión') }}</div>
                <div class="card-body">
        
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="col-form-label text-md-left">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <br>
                                <label for="email" class="col-form-label text-md-left">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                <br>
                                <button style="background-color: #6b161c;" type="submit" class="btn btn-dark">
                                    {{ __('Continuar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="margin-bottom: -3%">
    <br><br><br>

    <div style="background-color: #282c3c; color: #fff; text-align: center">
        <br>
        <p>El agradecimiento a Marina Fernandez y a Pedro Patón</p>

        <a href="#">Condiciones de Uso y Venta</a>
        <a href="#">Aviso de Privacidad</a>
        <a href="#">Area legal</a>
        <a href="#">Cookies</a>
        © 1996-2021, Neatore.com, Inc. o afiliados. Todos los derechos reservados.
        <p style="color: #282c3c">-</p>
    </div>
</footer>
@endsection