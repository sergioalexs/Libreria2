@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'libro.store', 'method'=>'POST','files' => true])!!}
		  		@include('libro.forms.libro')
				{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection