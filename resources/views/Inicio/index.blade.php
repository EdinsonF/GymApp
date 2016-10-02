@extends('layouts.principal')


@section('content')

	@include('alerts.errorForm')
	@include('alerts.validarForm')
	
		<div class="header-info">

	        	<div class="login-logo">
    				<b>Crear Gym</b>
  				</div>
		    	<form   method="POST" action="{{ url('/') }}">
                        {{ csrf_field() }}
                      <div class="form-group has-feedback">
	                    <input type="text"   class="form-control" name="cedula" placeholder="Cédula" autocomplete="off">
	                   
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="text"   class="form-control" name="nombres" placeholder="Nombre y Apellidos" autocomplete="off">
	                    
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="text"   class="form-control" name="telefono" placeholder="Telefono" autocomplete="off">
	                    
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="text"   class="form-control" name="nombre_gym" placeholder="Nombre de Gimnasio" autocomplete="off">
	                    
	                  </div>

	                  <div class="form-group has-feedback">
	                    <textarea class="form-control" name="direccion" placeholder="Dirección" autocomplete="off"></textarea>   
	                    
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="email"   class="form-control" name="email" placeholder="Correo" autocomplete="off">
	                    
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="password"  class="form-control" name="password" placeholder="Contraseña" autocomplete="off">
	                    
	                  </div>

	                  <div class="row">
	                  	<div class="col-xs-8">
                          <div class="checkbox icheck">
                            <label>
                              	<a href="/login" class="text-center">Ya tengo una cuenta...</a>
                            </label>
                          </div>
                        </div>
                        
                        <div class="col-xs-4">
                          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Registrar">
                        </div>
                 
	                  </div>
	            </form>
		</div>


	        
	

@stop