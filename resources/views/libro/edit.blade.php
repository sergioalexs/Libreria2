@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($libro,['route'=> ['libro.update',$libro->id],'method'=>'PUT','files' => true])!!}
			@include('libro.forms.libro')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		
	@endsection