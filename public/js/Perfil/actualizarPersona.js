$(document).ready(function(){
    CargarDatos();

    //cerrarMensajes
    $(".closeMsj").click(function() {
        $(this).parent().hide();
    });
    
});


function CargarDatos(){

    var route= "http://localhost:8000/persona/"+0+"";

    $.get(route, function(result){
        //console.log(result.datos[0].id);

        //$('#fotografia').attr('src',"http://localhost:8000/images_persona/"+result.datos[0].foto+""); 
        
        $('#cedula').val(result.datos[0].cedula);
        $('#nombres').val(result.datos[0].nombres);
        $('#telefono').val(result.datos[0].telefono);
        
    });
    
}



$("#archivo").change(function(event) {
   
        
        var formu=$(".formarchivo");
        var nombreform=$(".formarchivo").attr("id");
        var archivo=$("#archivo").val();
        
        if(nombreform=="f_subir_imagen" ){ var miurl="http://localhost:8000/subir_imagen_persona";  var divresul="notificacion_resul_fci"}
        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);
//hasta aqui.
        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
                  $(".msj-success2").html('Foto actualizada');
                  $('.mensaje-foto').children(".success2").fadeIn();
                  $('.fotografia').removeAttr('src');
                  $('.fotografia').attr('src',"images_persona/"+data+"");               
            },
            //si ha ocurrido un error
            error: function(data){
                  $(".msj-danger2").html('A ocurrido un error');
                  $('.mensaje-foto').children(".danger2").fadeIn();
                
            }
        });

});


$("#ActualizarDatos").click(function(){

    var route="http://localhost:8000/persona/"+0+"";
    var cedula=$("#cedula").val();
    var nombres=$("#nombres").val();
    var telefono=$("#telefono").val();
    var token =$("#token1").val();
    
    $.ajax({
        url:        route,
        headers:    {'X-CSRF-TOKEN': token},
        type:       'PUT',
        dataType:   'json',
        data:       {
                    cedula: cedula,
                    nombres: nombres,
                    telefono:telefono
                    },

        success:function(msj){
            
            $(".msj-success2").html('Datos actualizados');
            $('.mensaje-datos').children(".success2").fadeIn();
           
        },
         //Error que mostrará desde PHP
         error: function(msj) {
            $(".msj-danger2").html('A ocurrido un error');
            $('.mensaje-datos').children(".danger2").fadeIn();
               
         }

    });
});




$("#AcatualizarAcceso").click(function(){

    var route="http://localhost:8000/user/"+0+"";
    
    var correo=$("#correo").val();
    var clave=$("#clave").val();
    var token =$("#token2").val();
    
    $.ajax({
        url:        route,
        headers:    {'X-CSRF-TOKEN': token},
        type:       'PUT',
        dataType:   'json',
        data:       {
                   
                    email: correo,
                    password:clave
                    },

        success:function(msj){
            
            $(".msj-success2").html('Datos actualizados');
            $('.mensaje-acceso').children(".success2").fadeIn();
           
        },
         //Error que mostrará desde PHP
         error: function(msj) {
            $(".msj-danger2").html('A ocurrido un error');
            $('.mensaje-acceso').children(".danger2").fadeIn();
               
         }

    });
});
