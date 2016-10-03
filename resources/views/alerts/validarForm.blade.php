@if(count($errors)>0)
		<div class="alert alert-danger alert-dismissible" role="alert" style="z-index:1; filter:alpha(opacity=60); position:fixed; height: relative; width: 50%; top: 7%; left: 8%;-moz-opacity:100; opacity:100">
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 	
			<ul>
				@foreach($errors->all() as $error)
				<li> {!!$error!!}</li>
				@endforeach
			</ul>
		</div>
	@endif

<!-- background-color: transparent; position:fixed; height: relative; width: 500px;outline: none; top: 2px;right: 350px; -->
