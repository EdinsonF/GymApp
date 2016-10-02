@extends('layouts.principal')

@section('content')

	<div class="review-content">
		<div class="top-header span_top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
				<p>Movie Theater</p>
			</div>
			<div class="clearfix"></div>
		</div>

	
		<div class="reviews-section">
			<h3 class="head">Peliculas Disponibles</h3>
				<div class="col-md-9 reviews-grids">

					

						<div class="review">
							<div class="movie-pic">
								<img src="" alt="" />
							</div>
							<div class="review-info">
									<a class="span" href="#"></i></a>
									<p class="info">REPARTO: &nbsp; &nbsp; </p>
									<p class="info">DIRECCIÓN:&nbsp; &nbsp; </p>
									<p class="info">GENRERO:&nbsp; &nbsp; </p>
									<p class="info">DURACIÓN:&nbsp; &nbsp; </p>
							</div>
							<div class="clearfix"></div>
						</div>
					
				</div>
				<div class="clearfix"></div>
		</div>
	
	</div>


	<div class="review-slider">
		<ul id="flexiselDemo1">
			
		</ul>
	</div>
@stop