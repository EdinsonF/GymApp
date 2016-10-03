@extends('layouts.admin_principal')
@include('alerts.errorForm')
@include('alerts.validarForm')

@section('contenido')



	<div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Administracion</b>.GymApp</a>
      </div>
      <!-- /.login-logo -->
	      <div class="login-box-body">
	        <p class="login-box-msg">Registro de SuperAdministrador</p>

	            {!!Form::open(['url'=>'registro/super_admin','method'=>'POST'])!!}
            	{{ csrf_field() }}
	            	<div class="form-group has-feedback">
	                   <input type="text" class="form-control" placeholder="Nombre y Apellido" name="nombres" autocomplete="off">
	                   <span class="glyphicon glyphicon-user form-control-feedback"></span>
	                </div>
	                <div class="form-group has-feedback">
	                   <input type="text" class="form-control" placeholder="Cedula" name="cedula" autocomplete="off">
	                   <span class="glyphicon glyphicon-tasks form-control-feedback"></span>
	                </div>
	                <div class="form-group has-feedback">
	                   <input type="phone" class="form-control" placeholder="Telefono" name="telefono" autocomplete="off">
	                   <span class="glyphicon glyphicon-phone form-control-feedback"></span>
	                </div>
	                <div class="form-group has-feedback">
	                   <input type="email" class="form-control" placeholder="Correo" name="email" autocomplete="off">
	                   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	                </div>

	                <div class="form-group has-feedback">
	                   <input type="password" class="form-control" placeholder="Contraseña" name="password" autocomplete="off">
	                   <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                </div>
	                <div class="row">
	                        <!-- /.col -->
	                        <div class="col-xs-4">
	                          <button type="submit" class="btn btn-primary btn-block btn-flat">Crear</button>
	                        </div>
	                        <!-- /.col -->
	                </div>
	            {!!Form::close()!!}
	       </div>
  	<!-- /.login-box-body -->
	</div>
@stop