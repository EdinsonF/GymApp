<div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
          <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" id="fotografia" src="{{ url('images/logoGym.jpg') }}" alt="User profile picture">

                <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
  
                    <input type="hidden" name="id_usuario_foto" value="1"> 
                    <input type="hidden" name="_token" id="token"  value="<?= csrf_token(); ?>"> 

                    <div class="box-body">
                        <div class="form-group col-xs-12" >
                        </div>

                        <div class="form-group col-xs-12"  >
                             <label>Agregar Imagen </label>                             
                        </div>
                     
                        <div class="box-footer">
                              <button type="submit" class="btn btn-primary"><input name="imagen" id="archivo" type="file"   class="archivo form-control"  required  /></button>
                        </div>
                    </div>

                </form>
              

                <h3 class="profile-username text-center">Nombre Gym</h3>

                <p class="text-muted text-center">Eslogan</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Direccion</b> <a class="pull-right">-----</a>
                    </li>
                    <li class="list-group-item">
                      <b>Mesnualidad</b> <a class="pull-right">000.00</a>
                    </li>
                    <li class="list-group-item">
                      <b>Inscripcion</b> <a class="pull-right">000.00</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Publicar</b></a>
          </div>
            <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Sobre ti</h3>
          </div>
            <!-- /.box-header -->
          <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nombres</strong>

              <p class="text-muted">
                Nombre y Apellido
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Telefono</strong>
              <p class="text-muted">0000 000 00 00</p>
              <hr>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Que Ofreces?</strong>
              <p>Breve descripcion de tus actividades...</p>
          </div>
            <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>