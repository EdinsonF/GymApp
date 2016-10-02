@extends('layouts.principal')


@section('content')

	@include('alerts.errorForm')
	
	
		<div class="header-info">

	        	<div class="login-logo">
    				<b>Iniciar Sesión</b>
  				</div>
		    	<form   method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
	                  <div class="form-group has-feedback">
	                    <input type="email"   class="form-control" name="email" placeholder="Correo" value="edinson@gmail.com" autocomplete="off">
	                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="password"  class="form-control" name="password" placeholder="Contraseña" autocomplete="off">
	                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                  </div>

	                  <div class="row">
                        <div class="col-xs-8">
                              <div class="checkbox icheck">
					            <label >
					              <input type="checkbox"> Recordarme
					            </label>
					          </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Entrar">
                        </div>
                        <!-- /.col -->
	                  </div>
	            </form>
		
				<a href="#">Olvidó su contraseña?</a><br>
	            <a href="/" class="text-center">Crear mi gimnasio...</a>

		</div>
		


@stop