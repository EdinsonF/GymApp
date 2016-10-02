@extends('layouts.administrador')


@section('content')
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      

<div class="row">  

  <div class="col-md-6">

        <div class="box box-primary">
                        
                        <div class="box-header">
                          <h3 class="box-title">Editar información del Usuario</h3>
                        </div><!-- /.box-header -->

        <div id="notificacion_resul_feu"></div>



        <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >                
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="">              


        <div class="box-body ">
        <div class="form-group col-xs-12">
                              <label for="nombre">Nombres*</label>
                              <input type="text" class="form-control" id="nombres" name="nombres"  value=""  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="apellido">Apellidos</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" value="" >
        </div>

        <div class="form-group col-xs-12">
                              <label for="pais">Pais</label>
                              
                             
                               <select id="pais" name="pais" class="form-control">
       
                             
                              </select>
                         
                            
        </div>

        <div class="form-group col-xs-12">
                              <label for="ciudad">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" value=""  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="institucion">Institucion</label>
                              <input type="text" class="form-control" id="institucion" name="institucion"  value="" >
        </div>
        <div class="form-group col-xs-12">
                              <label for="ocupacion">Ocupacion</label>
                              <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="" >
        </div>
        <div class="form-group col-xs-12">
                              <label for="email">Email*</label>
                              <input type="text" class="form-control" id="email" name="email"   value="" >
        </div>



        </div>



        <div class="box-footer">
             <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </div>
        </form>
        </div>

  </div> <!-- end col mod 6 -->

  <div class="col-md-6">


      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Cambiar Fotografia</h3>
                      </div><!-- /.box-header -->
     
      <div id="notificacion_resul_fci"></div>

      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
      
       <input type="hidden" name="id_usuario_foto" value=""> 
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

        <div class="form-group col-xs-12" >


          
          <img src=""  alt="User Image"  style="width:160px;height:160px;" id="fotografia_usuario" >
                <!-- User image -->
          
       </div>


      <div class="form-group col-xs-12"  >
             <label>Agregar Imagen </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
      </div>

     
      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
      </div>

       


      </div>

      </form>

      </div>

  </div>    <!-- end col mod 6 -->


    <div class="col-md-6">

<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Cambiar Password</h3>
                </div><!-- /.box-header -->

                <div id="notificacion_resul_fcp"></div>
                <!-- form start -->
                <form method="post" id="f_cambiar_password" class="form_entrada" action="cambiar_password" >
                     <input type="hidden" name="id_usuario_password" value=""> 
                   <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Entrar email" value="" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario" placeholder="Password">
                    </div>
                  
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Datos</button>
                  </div>
                </form>
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->

    </section>
    <!-- /.content -->
    

  <!-- /.content-wrapper -->
  @endsection

  @section('script')

    {!!Html::script('js/Perfil/subirFoto.js')!!}
    {!!Html::script('js/Perfil/AjaxUpload.2.0.min.js')!!}

  @endsection

  