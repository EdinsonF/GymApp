@extends('layouts.principal')

@section('content')

@include('alerts.errorForm')
@include('alerts.validarForm')
	
	<div class="header-info">

    	<!-- <div class="login-logo">
			<b>Crear Gym</b>
		</div> -->
  		
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_1" data-toggle="tab">Atletas</a>
				</li>
				<li>
					<a href="#tab_Gimnasio" data-toggle="tab">Gimnasios</a>
				</li>
				
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="tab_1">
	                <div class="cuerpo">
	                    <div class="box-body chat" id="chat-box">
	                        <div class="item">
                                <code>
                                    Todo los Campos del Formulario deben ser llenados
                                </code>
	                        </div>
	                    </div>
	                    <!--Formulario-->
	                    <div class="formularioCont">
	                    	<div class="form-cont">
	                        	<div class="box-titulo">
	                            	<span> Registrar Atleta</span>
	                          	</div>
	                          	<div class="body-form">
									{!!Form::open(['url'=>'registro/atleta','method'=>'POST'])!!}
            							{{ csrf_field() }}
            								
					                      <div class="form-group has-feedback">
						                    <input type="text"   class="form-control" name="cedula_atleta" id="cedula_atleta" placeholder="Cédula" autocomplete="off">
						                   
						                  </div>

						                  <div class="form-group has-feedback">
						                    <input type="text"   class="form-control" name="nombres_atleta" id="nombres_atleta" placeholder="Nombre y Apellidos" autocomplete="off">
						                    
						                  </div>

						                  <div class="form-group has-feedback">
						                    <input type="text"   class="form-control" name="telefono_atleta" id="telefono_atleta" placeholder="Telefono" autocomplete="off">
						                    
						                  </div>

						                  <div class="form-group has-feedback">
						                    <input type="email"   class="form-control" name="email_atleta" id="email_atleta" placeholder="Correo" autocomplete="off">
						                    
						                  </div>

						                  <div class="form-group has-feedback">
						                    <input type="password"  class="form-control" name="password_atleta" id="password_atleta" placeholder="Contraseña" autocomplete="off">
						                    
						                  </div> 
			                            <div class="box-footer">
			                                {!!Form::submit('Registrar Atleta',['class'=>'btn btn-primary','name'=>'atleta_Btn'])!!}
			                                <!-- <input type="submit" class="" value="Registrar Atleta" id="registro_atleta"> -->
			                            </div>
    								{!!Form::close()!!}				                            	  
	                            </div>
	                      	</div>
	                    </div><!-- /.Formulario-->
	                </div> <!-- /.el cuerpo-->
				</div><!--  /.Div de la tab-->

				<div class="tab-pane" id="tab_Gimnasio">
                  	<div class="cuerpo">
                      	<div class="box-body chat" id="chat-box">
                            <div class="item">
                                <code>
                                	Todo los Campos del Formulario deben ser llenados
                              	</code>
                            </div>
                      	</div>

						<div class="formularioCont">
	                    	<div class="form-cont">
	                        	<div class="box-titulo">
	                            	<span> Registrar Gimnasio</span>
	                          	</div>
	                          	<div class="body-form">
									{!!Form::open(['url'=>'registro/gym','method'=>'POST'])!!}
            							{{ csrf_field() }}
										

										<div class="form-group has-feedback">
											<input type="text"   class="form-control" name="nombres_gym_persona" id="nombres_gym_persona" placeholder="Nombre y Apellidos" autocomplete="off">

										</div>

										<div class="form-group has-feedback">
											<input type="text"   class="form-control" name="nombre_gym" id="nombre_gym" placeholder="Nombre de Gimnasio" autocomplete="off">

										</div>

										<div class="form-group has-feedback">
											<textarea class="form-control" name="direccion_gym" id="direccion_gym" placeholder="Dirección" autocomplete="off" style="resize:none;"></textarea>   

										</div>

										<div class="form-group has-feedback">
											<input type="email"   class="form-control" name="email_gym" id="email_gym"placeholder="Correo" autocomplete="off">

										</div>

										<div class="form-group has-feedback">
											<input type="password"  class="form-control" name="password_gym" id="password_gym" placeholder="Contraseña" autocomplete="off">

										</div> 
			                            <div class="box-footer">
			                            	{!!Form::submit('Registrar Gym',['class'=>'btn btn-primary','name'=>'gym_Btn'])!!}
			                            	<!-- <input type="submit" class="btn btn-primary" value="Registrar Gym" id="registro_gym"> -->
			                            </div>
    								{!!Form::close()!!}				                            	  
	                            </div>
	                      	</div>
	                    </div><!-- /.Formulario-->


                  	</div> <!-- /.el cuerpo-->
				</div><!-- /.tab-pane -->
			</div><!-- /.tab-content -->
			</div><!-- nav-tabs-custom -->

			<div class="row">
          	<div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  	<a href="/login" class="text-center">Ya tengo una cuenta...</a>
                </label>
              </div>
            </div>
        </div>
	</div>
	
@endsection