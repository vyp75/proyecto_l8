<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Escaner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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

    @extends('stockblades.navbar')
    @section('content')   

<div class="container">
    <div class="row justify-content-center">           
        <div class="col-md-6"> 
            <div class="alert mx-auto" style="width:75%; margin-top: 1%; background-color: #B0BEC5" role="alert">
                
                <h5 style="text-align: center; padding-top:1%">Inserción de artículo.</h5>
            </div>  
            <form method="get" action="/insert/{{$codigo}}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="email" class="col-form-label text-md-left"> Código del artículo</label>
                        <input type="text" class="form-control" value="{{$codigo}}" required readonly>                                        
                    </div>
                </div>
        
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="email" class="col-form-label text-md-left"> Nombre del artículo</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" required autofocus>                                        
                    </div>
                </div>
        
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="precio" class="col-form-label text-md-left">Precio por unidad</label>
                        <input id="precio" type="number" step="0.01" class="form-control" name="precio" required>
                    </div>
                </div>

                <div class="form-group row mb-0" >
                    <div class="mx-auto" style="margin-top:2%">
                        <button style="background-color: #6b161c;" type="submit" class="btn btn-dark">
                            Insertar
                        </button>
                    </div>
                </div>
            </form>          
        </div>
    </div>
</div> 
    @endsection

</body>
</html>


