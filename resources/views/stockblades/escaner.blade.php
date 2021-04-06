<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Escaner</title>

    <!--Jquery-->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        button{
            background-color: #37474F;
            color: #ebecea
        }
        button:hover{
            background-color: #263238;
            color: #ebecea;
            font-weight: bolder;
        }

    </style>
</head>
<body> 
    
    @if (isset($insercion) && $insercion==1 )
        <script>var mensaje=1;</script>
    
    @else
        <script>var mensaje=0;</script>
    @endif

    @extends('stockblades.navbar')
    @section('content')   
    

<div class="container">
    <div class="alert mx-auto" style="width:85%; margin-top: 5%; background-color: #B0BEC5" role="alert">
        <h5>Para utilizar esta opción debe descargar la aplicación -zxing- en la Play Store.</h5>
        <h6>En caso de no tener la aplicación pulse el botón de descargar.</h6>
        <h6>Si la aplicación ya la tiene instalada pulse el botón de escanear.</h6>
        <hr>
        <div class="text-center">
            <button type="button" class="btn" style="display: bock;margin-right:1%;margin-top:1.7%;background-color: #282c3c; color: #fff; " 
                onclick="location.href='https://play.google.com/store/apps/details?id=com.google.zxing.client.android'">Descargar&nbsp;
                <i class="fas fa-download"></i>
            </button>
            <button type="button" class="btn" style="display: bock;margin-right:1%;margin-top:1.7%;background-color: #282c3c; color: #fff; " 
                onclick="location.href='http://zxing.appspot.com/scan?ret={{urlencode(url()->current().'/{CODE}')}}'">Escanear&nbsp;
                <i class="fas fa-barcode"></i>
            </button>
        </div>
    </div>
</div> 
<br><br><br><br>
<footer style="margin-bottom: -3%;">
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
        <br>
    </div>
</footer>
    @endsection
    <script>
        if(mensaje==1){
            Swal.fire(
                'Genial!',
                'Los datos han sido insertados',
                'success'
                );
        }
    </script>

</body>
</html>