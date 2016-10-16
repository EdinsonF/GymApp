@extends('layouts.administrador')


@section('content')
<!-- Content Wrapper. Contains page content -->
 
  <section class="content">
   <h3>
      Perfil
    </h3>
      @include('alerts.mensajeJS')
      @include('alerts.msjErrorJS')
      <div class="row">
        

          <!-- /.col GLOBAL -->
          <div class="col-md-11">
              <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#personal" data-toggle="tab">Mis Datos</a></li>
                    <li><a href="#gym" data-toggle="tab">Gimnasio</a></li>
                    <li><a href="#mensualidad" data-toggle="tab">Mensualidad</a></li>
                  </ul>
                  <!-- CONTENEDOR PESTAÑA-->
                  <div class="tab-content">
                    <!-- PESTAÑA USUARIO-->
                    <div class="active tab-pane" id="personal">
                          <!--  INICIO SUB-ROW -->
                          <div class="row"> 

                              <div class="col-md-6">

                                <div class="box box-gray">
                                      <div class="box-header">
                                          <div class="mensaje-foto">
                                            @include('alerts.msjSuccessCorto')
                                            @include('alerts.msjErrorCorto')
                                          </div>
                                          <h3 class="box-title">Cambiar Fotografia</h3>
                                        
                                      </div><!-- /.box-header -->
                                      
                                      


                                      @if(isset(Auth::user()->foto))
                                      <img class="profile-user-img img-responsive img-circle fotografia"  src="images_persona/{{Auth::user()->foto}}"  alt="User profile picture">
                                      @else 
                                      <img class="profile-user-img img-responsive img-circle fotografia"  src="images/logoGym.jpg"  alt="User profile picture">
                                      @endif
                                      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_persona" class="formarchivo" enctype="multipart/form-data" >                

                                          <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>"> 
                                          <div class="box-body">
                                              <div class="form-group col-xs-12" >
                                              </div>
                                    
                                              <div class="box-footer" align="center">
                                                  <div class="form-group col-xs-12"  >
                                                       <label>Cambiar Imagen </label>                             
                                                  </div>
                                                  <input name="foto" id="archivo" type="file"  class="fileMaster"  required  />
                                              </div>
                                          </div>

                                      </form>
                                </div>

                              </div>    <!-- end col mod 6 --> 

                              <div class="col-md-6">
                                  <div class="box box-gray">                      
                                    <div class="box-header">
                                        <div class="mensaje-datos">
                                            @include('alerts.msjSuccessCorto')
                                            @include('alerts.msjErrorCorto')
                                        </div>
                                        <h3 class="box-title">Información Usuario</h3>
                                    </div><!-- /.box-header -->
                                    <div id="notificacion_resul_feu"></div>

                                      
                                          <input type="hidden" id="token1" name="_token" value="<?php echo csrf_token(); ?>"> 
                                          <div class="box-body ">

                                              <div class="form-group col-xs-12">
                                                  <label for="nombre">Cédula*</label>
                                                  <input type="text" class="form-control" id="cedula"  autocomplete="off"  value=""  >
                                              </div>
                                              <div class="form-group col-xs-12">
                                                  <label for="nombre">Nombre y Apellido*</label>
                                                  <input type="text" class="form-control" id="nombres"  autocomplete="off"  value=""  >
                                              </div>

                                              <div class="form-group col-xs-12">
                                                  <label for="ciudad">Teléfono</label>
                                                  <input type="text" class="form-control" id="telefono"  autocomplete="off" value=""  >
                                              </div>              
                                          </div>

                                          <div class="box-footer">
                                               <button  id="ActualizarDatos" class="btn btn-primary">Actualizar</button>
                                          </div>
                                      
                                  </div>

                              </div> <!-- end col mod 6 -->
                          </div>
                          <div class="row">
                              <div class="col-md-6">

                                  <div class="box box-gray">
                                          <div class="box-header with-border">
                                            <div class="mensaje-acceso">
                                              @include('alerts.msjSuccessCorto')
                                              @include('alerts.msjErrorCorto')
                                            </div>
                                            <h3 class="box-title">Datos de Acceso</h3>
                                          </div><!-- /.box-header -->

                                          <div id="notificacion_resul_fcp"></div>
                                              <!-- form start -->
                                              <input type="hidden" name="_token2" id="token2"  value="<?= csrf_token(); ?>"> 
                                              <div class="box-body">
                                                  <div class="form-group">
                                                    <label for="exampleInputEmail1">Correo </label>
                                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" autocomplete="off" value="{{ Auth::user()->email }}" >
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña"  autocomplete="off">
                                                  </div>           
                                              </div><!-- /.box-body -->

                                              <div class="box-footer">
                                                <button  id="AcatualizarAcceso" class="btn btn-primary">Actualizar</button>
                                              </div>
                                          
                                  </div>
                              </div>    <!-- end col mod 6 -->

                          </div> <!-- end sub row -->
                      
                    </div>
                    <!--  FIN DE LA PESTAÑA USUARIO -->
                    
                    <!--  PESTAÑA GIMNASIO -->
                    <div class="tab-pane" id="gym">
                        <div class="form-horizontal">
                            <input type="hidden" name="_token3" id="token3"  value="<?= csrf_token(); ?>"> 
                            <div class="form-group">
                              <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre_gym" placeholder="Nombre">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Dirección</label>

                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Estatus</label>

                                <div class="col-sm-10">
                                  <select id="estatus" class="form-control">
                                    <option>SELECCIONE...</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Select File</label>
                              <div class="col-sm-10">
                                <input id="input-6" name="input6[]" type="file" multiple class="file-loading">
                              </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" id="ActualizarGym" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                       </div>
                    </div>
                    <!--  FIN DE LA PESTAÑA DE GIMNASIO -->

                    <!--   -->
                    <div class="tab-pane" id="mensualidad">
                        <form class="form-horizontal">
                            <div class="form-group">
                              <label for="inputName" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              </div>
                            </div>                  
                        </form>
                    </div>
                    <!--   -->


                    
                  </div>
                  <!-- /.FIN DEL CONETENDOR DE PESTAÑA -->

              </div>
              <!-- /.nav-tabs-custom -->
          </div>
          <!--  FIN GLOBAL /.col -->
      </div>
      <!-- /.row -->

  </section>
  <!-- /.content -->
    

  <!-- /.content-wrapper -->
  @endsection

  @section('script')

    {!!Html::script('js/Perfil/actualizarPersona.js')!!}
    {!!Html::script('js/Gym/gym.js')!!}
    {!!Html::script('js/fileinput.js')!!}
    <script>
    
    $(".fileMaster").fileinput({
    showUpload: false,
    showCaption: false,    
    });
    
    </script>

    <script>
    $(document).on('ready', function() {
        $("#input-6").fileinput({
            showUpload: false,
            maxFileCount: 10,
            mainClass: "input-group-lg"
        });
    });
  </script>
  @endsection

  