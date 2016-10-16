$(document).ready(function(){
    CargarDatosGym();

    
});

function CargarDatosGym(){

    var route= "http://localhost:8000/gimnasio/"+0+"";

    $.get(route, function(result){
        //console.log(result.datos[0].id);

        //alert(result.datos[0]);
        $('#nombre_gym').val(result.datos[0].nombre_gimnasio);
        $('#direccion').val(result.datos[0].direccion);
        $('#estatus').val(result.datos[0].estatus);
        
    });
    
}


$("#ActualizarGym").click(function(){

    var route="http://localhost:8000/gimnasio/"+0+"";
    var nombre_gym=$("#nombre_gym").val();
    var direccion=$("#direccion").val();
    var estatus=$("#estatus").val();
    var token =$("#token3").val();
    
    $.ajax({
        url:        route,
        headers:    {'X-CSRF-TOKEN': token},
        type:       'PUT',
        dataType:   'json',
        data:       {
                    nombre_gimnasio: nombre_gym,
                    direccion: direccion,
                    estatus:estatus
                    },

        success:function(msj){
            
            $("#mensajeSuccess").html('Datos actualizados');
            $("#msj-success").fadeIn();
           
        },
         //Error que mostrará desde PHP
         error: function(msj) {
            $("#mensajeDanger").html('A ocurrido un error');
            $('#msj-danger').fadeIn();
               
         }

    });
});