@extends('layouts.principal')
	@section('content')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="#"><img src="images/logo.png" alt="" /></a>
					<p>Contacto</p>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<!---contact-->


	<div class="main-contact">
		 <h3 class="head">CONTACTANOS</h3>
		 <p>ESTAMOS SIEMPRE AQUÍ PARA AYUDARLE</p>
		 <div class="contact-form">
			 {!!Form::open(['route'=>'correo.store','method'=>'POST'])!!}
					 	<div class="col-md-6 contact-left">
					 		{!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
					 		{!!Form::text('email',null,['placeholder' => 'Email'])!!}
						</div>
						<div class="col-md-6 contact-right">
							{!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
						</div>
						{!!Form::submit('ENVIAR')!!}
					 {!!Form::close()!!}
	     </div>
</div>
	@endsection	