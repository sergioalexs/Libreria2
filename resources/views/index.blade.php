@extends('layouts.principal')
@include('alerts.errors')
	@include('alerts.request')
	@section('content')
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="#"><img src="images/logo.png" alt="" /></a>
					<p>BIENVENIDOS</p>
				</div>
				

			
				<div class="clearfix"></div>

				<div class="header-info">
				<h1>TU LIBRERIA FAVORITA</h1>
				<h2>Ingreso:</h2>
				<br>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
			</div>
			
		</div>

		

		<div class="review-slider">
			 <ul id="flexiselDemo1">
			@foreach($libros as $libro)
				<li><img src="libros/{{$libro->portada}}" alt=""/></li>
			 @endforeach
		</ul>
			
		</div>
	@endsection	