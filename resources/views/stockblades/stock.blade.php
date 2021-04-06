<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Stock')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous">
            <!--Jquery-->
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!--SweetAlert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!--Select 2-->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


        <!--JS-->
        <script src="{{asset('js/funciones_stock.js')}}"></script>
</head>

<body> 
@include('stockblades.navbar')

<div class="container">
    <div class="row justify-content-center">         
        <div class="col-md-7">  
            <div class="form-group row">
                <div class="col-md-12">
                    <div id="articulo">
                        <label class="mx-auto" for="id_label_multiple" style="width: 100%;" >
                            Artículo
                                <select class="js-example-basic-single form-control" id="articuloSelect"  style="width: 100%;"></select>
                        </label>
                    </div>
                                                        
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-md-12">
                    <div id="color">
                        <label for="id_label_multiple" style="width: 100%;" >
                            Color
                                <select class="js-example-basic-single form-control" id="colorSelect"  style="width: 100%;"></select>
                        </label>
                    </div>                                      
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-md-12">
                    <div id="talla">
                        <label for="id_label_multiple" style="width: 100%;" >
                            Talla
                                <select class="js-example-basic-single js-states form-control" id="tallaSelect"  style="width: 100%;"></select>
                        </label>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 mx-auto" style="margin-top: 2%">
            <table class="table" id="tabla" style="text-align: center">
                <thead class="thead-dark">

                </thead>
                <tbody>
           
                </tbody>
            </table>
            <div style="display: block; text-align: right">
                <button style="background-color: #282c3c; color: #fff" type="button" 
                        id="boton" 
                        class='btn' 
                        onclick="boton()" 
                        data-placement="left"
                        data-toggle="tooltip"
                        title="Este boton limpia los filtros">Limpiar
                </button>
        
            </div>
        </div>
    </div>
</div>
<br><br><br>
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
        <br><br>
    </div>
</footer>


<script>
$(document).ready(function(){

    $("#articuloSelect").select2({
        minimumInputLength: 3,
        language: {
                inputTooShort: function () {
                return "Introduzca como mínimo 3 caracteres";
            },noResults: function() {
              return "No se ha encontrado el artículo";        
            },
        }
    });

            $("#colorSelect").select2(
                {
                    language: {
                        noResults: function() {
                        return "No se han encotrado colores";        
                        }, 
                    }
                });

            $("#tallaSelect").select2(
                {
                    language: {
                        noResults: function() {
                        return "No se han encotrado tallas";        
                        }, 
                    }
                });
});
$("#boton").hide()

$(document).on('keyup', '.select2-search__field', function (e) {  
            texto=$(this).val();
            console.log(texto)
             
            peticion(texto); 
        });

        $("#articuloSelect").on('select2:select', function(){
            $('#tabla thead').empty()
            $('#tabla tbody').empty()            

            peticionColor($("#articuloSelect").val());
            
        });
        $("#colorSelect").on('select2:select', function(){

            peticionTalla($("#articuloSelect").val());

            
        });
        $("#tallaSelect").on('select2:select', function(){
            
            insertarDatos($("#articuloSelect").val(), $("#colorSelect").val(),$("#tallaSelect").val())
            $("#boton").show()


});


</script>
<script>
$(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>