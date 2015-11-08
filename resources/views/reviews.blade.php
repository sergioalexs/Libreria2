@extends('layouts.principal')
	@section('content')
				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="#"><img src="images/logo.png" alt="" /></a>
					<p>Libros</p>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Libros disponibles</h3>
					<div class="col-md-9 reviews-grids">
						
                       @foreach($libros as $libro)
							<div class="review">
								<div class="movie-pic">
									<img src="libros/{{$libro->portada}}" alt="" />
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$libro->nombre}}</i></a>
									<p class="info">AUTOR:&nbsp;&nbsp;{{$libro->autor}}</p>
									<p class="info">CATEGORIA:&nbsp;&nbsp;{{$libro->c_nombre}}</p>
									<p class="info">EDITORIAL:&nbsp;&nbsp;{{$libro->editorial}}</p>
									<p class="info">PAGINAS:&nbsp;&nbsp;{{$libro->paginas}}</p>
									<p class="info">AÑO:&nbsp;&nbsp;{{$libro->anyo}}</p>
									<p class="info">PRECIO:&nbsp;&nbsp;{{$libro->precio}}</p>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach

						

					</div>


					<div class="clearfix"></div>
			</div>
			</div>

			{!!$libros->render()!!}
			
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 @foreach($libros as $libro)
				<li><img src="libros/{{$libro->portada}}" alt=""/></li>
			 @endforeach
				
			</ul>	
		</div>	

	@endsection