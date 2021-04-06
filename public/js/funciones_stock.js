        function peticion(valor) {
            if(valor.length>=3){
                $('#articuloSelect').val(null).trigger('change');
                $.get("/stock/"+valor, function(json) {
                    $("#articuloSelect").append("<option>-</option>"); 
                    $.each(json, function(k, v){                        
                        var newOption = new Option(v, k, false, false); 
                          $('#articuloSelect').append(newOption).trigger('change');
                        //$("#articuloSelect").append("<option value='"+k+"'>"+v+"</option>"); 
                    });
            });
        }
    }

        function peticionColor(articulo) {
            $.get("/color/"+articulo, function(json) { 
                $("#colorSelect").append("<option>-</option>");
                if(json.length==0){
                    $("#colorSelect").append("<option>Color único</option>"); 
                }else{ 
                    $.each(json, function(k, v){
                        var newOption = new Option(v, k, false, false); 
                            $('#colorSelect').append(newOption).trigger('change');
                                //$("#colorAuto").append("<option>"+v+"</option>"); 
                    });
                }
            });
        }

        function peticionTalla(articulo) {
            $.get("/talla/"+articulo, function(json) {
                $("#tallaSelect").append("<option>-</option>"); 
                if(json.length==0){
                    $("#tallaSelect").append("<option>Color único</option>"); 
                }else{
                    $.each(json, function(k, v){
                        var newOption = new Option(v, k, false, false); 
                        $('#tallaSelect').append(newOption).trigger('change');
                            //$("#tallaAuto").append("<option>"+v+"</option>"); 
                    });
                }
            });
        }

        var stock = 0

        function insertarDatos(id_art, id_color, id_talla) {

            $.get("/recuento/"+id_art+'/'+id_color+'/'+id_talla, function(json) {
                $.each(json, function(k, v){
                        $("#tabla thead").append("<tr> <th colspan='2'>Código&nbsp;artículo</th><th colspan='2'>Unidades&nbsp;disponibles</th><th>Nº&nbsp;Unidades&nbsp;nuevas</th></tr>")
                        $("#tabla tbody").append("<tr>");
                        $("#tabla tbody").append("<td colspan='2'>"+id_art+"</td>"); 
                        $("#tabla tbody").append("<td colspan='2'>"+v+"</td>"); 
                        $("#tabla tbody").append("<td style='margin-top: 1%'><input class='introunidades' placeholder='Nº unidades' type='number' value='' required>&nbsp<button class='btn btn-outline-dark' onclick='enviarStock()'>Guardar"+"</td></form>"); 
                        $("#tabla tbody").append("</tr>");

                });                
            });            
        }

        function boton(){
            return window.location.href="stockblades.stock"
        }
       
        function enviarStock() {
            var articulo=$('#articuloSelect').val();
            var color=$('#colorSelect').val()
            var talla=$('#tallaSelect').val()
            var unidadesnuevas=parseInt($('.introunidades').val())

                    $.get("/guardar/"+articulo+'/'+color+'/'+talla+'/'+unidadesnuevas, function(json) {
            
                        if(json==0){
                            alerta_correcto()
                        }else{
                            alerta_fallida()
                            }
                        })
        }

        function alerta_correcto(){
            Swal.fire({
                title:'Perfecto!',
                text:'Los datos se han guardados',
                icon: 'success',
                iconColor: '#004D40',
                background:'#E0F7FA',
                allowEscapeKey: false,
                allowOutsideClick: false,
                confirmButtonText: "Aceptar",
                confirmButtonColor: '#26A69A',
                showClass:{
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass:{
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        }

        function alerta_fallido(){
            Swal.fire({
                title:'Vaya..',
                text:'No se han podido añadir esas unidades',
                icon: 'error',
                iconColor: '#DD2C00',
                background:'#D7CCC8',
                allowEscapeKey: false,
                confirmButtonText: "Aceptar",
                confirmButtonColor: '#4E342E',
                showClass:{
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass:{
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        }
        
