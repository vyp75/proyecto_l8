@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div style="margin-bottom: -4%; margin-top: -4%"><a href="{{ url('/') }}"><img style="display:block; margin:auto; width: 30%;" class="logo" src="images/logo.png" alt="logo"></a></div>
            <br>
            <div class="card">
                <div class="card-header" style="text-align: center; font-weight: bolder;background-color: #909090">{{ __('Crear una Cuenta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="email" class="col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                <br>
                                <button style="background-color: #6b161c; color: #fff" type="submit" class="btn">
                                    {{ __('Crea tu cuenta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<footer style="margin-bottom: -3%">
    <br>

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
