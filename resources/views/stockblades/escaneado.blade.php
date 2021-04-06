<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escaneado</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Jquery-->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--JS-->
    <script src="{{asset('js/funciones_stock.js')}}"></script>

    


</head>
<body>



   @if (isset($insercion) && $insercion==1 )
        <script>var mensaje=1;</script>
        
    @else
    <script>var mensaje=0;</script>
    @endif

    @extends('stockblades.navbar')
    @section('content')

    
    @if(sizeof($valores)!=0)
    @foreach ($valores as $item)
        @php($codigoart=$item->id_art)
    @endforeach

        <div class="container">
            <div class="alert mx-auto" style="width:75%; margin-top: 1%; background-color: #B0BEC5" role="alert">
                
                <h5 style="text-align: center; padding-top:1%">El artículo {{$item->id_art}} , {{$item->descripcionarticulo}}.</h5>
            </div>
            <br><br>
            <div style="display: block; text-align: center;" >
                <table class="table table-responsive" id="valores">
                        <thead class="thead-dark">
                            <th>Articulo</th>
                            <th>Unidades</th>
                            <th>Color</th>
                            <th>Talla</th>
                            <th colspan="2">Añadir Stock</th>
                        </thead>
                        <tbody>
                            @foreach ($valores as $elementos)
                                <form method="get" action="/insertar_escaner/{{$elementos->id_stock}}/{{$elementos->id_art}}/{{$elementos->color}}/{{$elementos->talla}}">
                                
                                    <tr>
                                        <th>{{$elementos->descripcionarticulo}}</th>
                                        <th>{{$elementos->unidades}}</th>
                                        <th>{{$elementos->color}}</th>
                                        <th>{{$elementos->talla}}</th>
                                        <td><input type="number" name="recuento" placeholder="Nº unidades" required>&nbsp;&nbsp;<input type="submit" class="btn btn-outline-dark" value="Guardar"></td>

                                    </tr>
                                </form>
                            @endforeach

                                
                    </tbody>
                </table>
            </div>
        </div>    
        

    @else
    
        <div class="container;">
            <div class="alert alert-info mx-auto" style="width:60%;" role="alert">
                <h4>El artículo escaneado no existe.</h4>
                <hr>
                <h5>¿Desea insertar el artículo en la Base de Datos?</h5>
                <label>La opción "<label class="text-danger">No</label>" le devolverá al escáner.</label>
                <div class="text-right">

                    <button type="button" class="btn btn-outline-success" style="display: bock;margin-right:2%" onclick="location.href='/insertar_articulo/{{$code}}'" >&nbsp;&nbsp;Si&nbsp;&nbsp;</button>

                    <button type="button" class="btn btn-outline-danger" style="display: bock;margin-right:2%; margin-top:2%" onclick="location.href='/escaner'">&nbsp;&nbsp;No&nbsp;&nbsp;</button>

                </div>        
            </div>
        </div>
        <br><br>
    
    @endif
    <br><br><br><br>
<footer style="margin-bottom: -3%;">
    <br>

    <div style="background-color: #282c3c; color: #fff; text-align: center">
        <br><br>
        <p>El agradecimiento a Marina Fernandez y a Pedro Patón</p>

        <a href="#">Condiciones de Uso y Venta</a>
        <a href="#">Aviso de Privacidad</a>
        <a href="#">Area legal</a>
        <a href="#">Cookies</a>
        © 1996-2021, Neatore.com, Inc. o afiliados. Todos los derechos reservados.
        <p style="color: #282c3c">-</p>
        <br>
    </div>
</footer>
    @endsection

    <script>
        if(mensaje==1){
            alerta_correcto()
        }
    </script>


   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>