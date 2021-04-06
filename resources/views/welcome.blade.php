<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Neatore</title>
        <style>

            .opc1{
                border-top: 4px solid #2E86C1;
                margin-right: 0.5%;
                margin-left: 12%;
                background-color: #ebecea;
            }
            .opc2{
                border-top: 4px solid #28B463;
                margin-right: 0.5%;
                background-color: #ebecea;
                
            }
            .opc3{
                border-top: 4px solid #FFC300;
                background-color: #ebecea;
            }
            .row{
                margin-right: auto;
                margin-left: auto;
            }
        </style>
        @extends('layouts.app')
    </head>
    <body style="background-color: #CECECE">
        
        @section('content')
        <div class="container-fluid" style=" width:100%">
            <div class="row" style=" background-color: #CECECE">
                <div class="col-3 mt-5" >
                    <img src="images/logo.png"  alt="" style="width: 100%; ">
                </div>
                <div class="col-9 mx-0">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/img1.jpg" class="d-block w-100" alt="imagen1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/img2.jpg" class="d-block w-100" alt="imagen2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/img3.jpg" class="d-block w-100" alt="imagen3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/img4.jpg" class="d-block w-100" alt="imagen4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/img5.jpg" class="d-block w-100" alt="imagen5">
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"  data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"  data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid d-none d-sm-block">
            <div class="row">
                    <div class="col-3 opc1">
                        <br>
                        <h4 style="text-align: center"><strong>Básico</strong></h4>
                        <h6 style="text-align: center"><strong>Gratis</strong></h6>
                        <br>
                        <p style="text-align: center; font-size:14px">Sin Mensualidad.</p>
                        <p style="padding-left: 1%; font-size:14px">Disfruta de nuestro servicio, registrandite</p>
                        <br>
                        <div style="text-align: center; color: #fff">
                            <a href="{{ route('register') }}" style="background-color: #2E86C1; text-decoration: none; border-radius: 15px; padding: 2%">comenzar</a>
                        </div>
                        <br>
                        <p style="padding-left: 1%; font-size:14px">Esta opción por defecto nos aporta las funciones principales de <strong>Neatore</strong> para poder concernos y saber si nuestro servicio esta en la medida de sus necesidades</p>
                        <br>
                    </div>
                    <div class="col-3 opc2">
                        <br>
                        <h4 style="text-align: center"><strong>Económico</strong></h4>
                        <h6 style="text-align: center"><strong>4.99€</strong></h6>
                        <br>
                        <p style="text-align: center; font-size:14px">Mensualidad.</p>
                        <p style="padding-left: 1%; font-size:14px">Un nivel alto, al alcance de todos vosotros.</p>
                        <br>
                        <div style="text-align: center; color: #fff">
                            <a href="#" style="background-color: #28B463; text-decoration: none; border-radius: 15px; padding: 2%">Suspendida</a>
                        </div>
                        <br>
                        <p style="padding-left: 1%; font-size:14px">En un comienzo, esta es una versión inicial de la aplicación con un gran nuemero de aplicaciones futuras. Las cuales quedaran habilitadas en el futuro.</p>
                        <br>
                    </div>
                    <div class="col-3 opc3">
                        <br>
                        <h4 style="text-align: center"><strong>Pro</strong></h4>
                        <h6 style="text-align: center"><strong>9.99€</strong></h6>
                        <br>
                        <p style="text-align: center; font-size:14px">Mensualidad.</p>
                        <p style="padding-left: 1%; font-size:14px">Las mejores prestaciones, al alcance de tu mano</p>
                        <br>
                        <div style="text-align: center; color: #fff">
                            <a href="#" style="background-color: #FFC300; text-decoration: none; border-radius: 15px; padding: 2%">Suspendida</a>
                        </div>
                        <br>
                        <p style="padding-left: 1%; font-size:14px">En un comienzo, esta es una versión inicial de la aplicación con un gran nuemero de aplicaciones futuras. Las cuales quedaran habilitadas en el futuro.</p>
                        <br>
                    </div>
            </div>
        </div>
        <br><br><br><br><br>
        <footer style="margin-bottom: -3%">
            <br><br>
            <div style="background-color: #38445c; color: #fff; text-align: center">
                <a href="{{ url('/') }}" class="px-1" style="background-color: #909090; text-decoration: none; border-radius: 15px;">Volver arriba</a>
            </div>
            <div style="background-color: #282c3c; color: #fff; text-align: center">
                <br>
                <p>El agradecimiento a Marina Fernandez y a Pedro Patón</p>

                <a href="#">Condiciones de Uso y Venta</a>
                <a href="#">Aviso de Privacidad</a>
                <a href="#">Area legal</a>
                <a href="#">Cookies</a>
                © 1996-2021, Neatore.com, Inc. o afiliados. Todos los derechos reservados.
                <p style="color: #282c3c">-</p>
                <br><br><br><br>
            </div>
        </footer>
        
        @endsection




    </body>
</html>
