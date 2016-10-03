
// $(function() 
//         {
//      var btn_firma = $('#archivo'), interval;

//         var formu=$(".formarchivo");
//         var nombreform=$(".formarchivo").attr("id");
//         var archivo=$("#archivo").val();
        
//         if(nombreform=="f_subir_imagen" ){ var miurl="http://localhost:8000/subir_imagen_usuario";  var divresul="notificacion_resul_fci"}
//         //información del formulario
//         var formData = new FormData($("#"+nombreform+"")[0]);
//         var token=$("#token").val();
// //hasta aqui.
// alert(formData);
//         //hacemos la petición ajax   
//         new AjaxUpload('#archivo', 
//             {
//                 action: miurl,
//                 headers:    {'X-CSRF-TOKEN': token},  
//             type: 'POST',
     
//             // Form data
//             //datos del formulario
//             data: formData,
//             //necesario para subir archivos via ajax
//             cache: false,
//             contentType: false,
//             processData: false,
//                 onSubmit : function(file , ext)
//                 {
                    
//                 },
//                 onComplete: function(event, respuesta)
//                 {
                   
//                 }
//             });
//     });




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
              
              $('#fotografia').removeAttr('src');
              $('#fotografia').attr('src',"http://localhost:8000/images_persona/"+data+"");               
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }
        });





});



 //SUBIR IMAGEN
//   $(document).on("submit",".formarchivo",function(e){

     
//         e.preventDefault();
//         var formu=$(this);
//         var nombreform=$(this).attr("id");
//         var archivo=$("#archivo").val();
        
//         if(nombreform=="f_subir_imagen" ){ var miurl="http://localhost:8000/subir_imagen_usuario";  var divresul="notificacion_resul_fci"}
//         //información del formulario
//         var formData = new FormData($("#"+nombreform+"")[0]);
// //hasta aqui.
//         //hacemos la petición ajax   
//         $.ajax({
//             url: miurl,  
//             type: 'POST',
     
//             // Form data
//             //datos del formulario
//             data: formData,
//             //necesario para subir archivos via ajax
//             cache: false,
//             contentType: false,
//             processData: false,
//             //mientras enviamos el archivo
//             beforeSend: function(){
//               $("#"+divresul+"").html($("#cargador_empresa").html());                
//             },
//             //una vez finalizado correctamente
//             success: function(data){
              
//               $('#fotografia').removeAttr('src');
//               $('#fotografia').attr('src',"http://localhost:8000/images_perfil/"+data+"");               
//             },
//             //si ha ocurrido un error
//             error: function(data){
//                alert("ha ocurrido un error") ;
                
//             }
//         });
//     });