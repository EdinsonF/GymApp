@extends('layouts.principal')


@section('content')
		@include('alerts.successForm')
		
		<div class="contact-content">
			<div class="top-header">
				<div class="login-logo">					
    				<b>Contacto</b>
    				
  				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
			<!---contact-->
		<div class="main-contact">
				
			<div class="clearfix"></div>
			<div class="contact-form">
 				<form>
	 				<div class="col-md-6 contact-left">
		  				<input type="text" placeholder="Nombre y Apellido" required/>
		  				<input type="text" placeholder="E-mail" required/>
		  				<input type="text" placeholder="Telefono" required/>
	  				</div>
	  				<div class="col-md-6 contact-right">
		 				<textarea placeholder="Mensaje"></textarea>
		 			</div>
	 				<div class="clearfix"></div>
	 				<div class="col-xs-4">
            			<input type="submit" class="btn btn-primary btn-block btn-flat" value="SEND"/>
        			</div>
 				</form>
			</div>
		</div>

@endsection