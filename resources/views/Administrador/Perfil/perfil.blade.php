@extends('layouts.administrador')


@section('content')
<!-- Content Wrapper. Contains page content -->

  <section class="content">
   <h3>
      Perfil
    </h3>

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
                                                      <h3 class="box-title">Información Usuario</h3>
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

                                <div class="box box-gray">
                                      <div class="box-header">
                                        <h3 class="box-title">Cambiar Fotografia</h3>
                                      </div><!-- /.box-header -->
                                 
                                      <div id="notificacion_resul_fci"></div>

                                      <img class="profile-user-img img-responsive img-circle" id="fotografia" src="{{ url('images/logoGym.jpg') }}" alt="User profile picture">

                                      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_persona" class="formarchivo" enctype="multipart/form-data" >                
                        
                                          <input type="" name="id_usuario_foto" value="1"> 
                                          <input type="hidden" name="_token" id="token"  value="<?= csrf_token(); ?>"> 

                                          <div class="box-body">
                                              <div class="form-group col-xs-12" >
                                              </div>

                                              <div class="form-group col-xs-12"  >
                                                   <label>Cambiar Imagen </label>                             
                                              </div>
                                           
                                              <div class="box-footer" align="center">
                                                    <button type="submit" class="btn btn-primary"><input name="foto" id="archivo" type="file"   class="archivo form-control"  required  /></button>
                                              </div>
                                          </div>

                                      </form>
                                </div>

                              </div>    <!-- end col mod 6 -->


                              <div class="col-md-6">

                                  <div class="box box-gray">
                                          <div class="box-header with-border">
                                            <h3 class="box-title">Datos de Acceso</h3>
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

                          </div> <!-- end sub row -->
                      
                    </div>
                    <!--  FIN DE LA PESTAÑA USUARIO -->
                    
                    <!--  PESTAÑA GIMNASIO -->
                    <div class="tab-pane" id="gym">
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
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                <div class="col-sm-10">
                                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                    
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
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

    {!!Html::script('js/Perfil/subirFoto.js')!!}
    {!!Html::script('js/Perfil/AjaxUpload.2.0.min.js')!!}

  @endsection

  