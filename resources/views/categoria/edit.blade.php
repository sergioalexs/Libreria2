@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($categoria,['route'=>['categoria.update',$categoria],'method'=>'PUT'])!!}
	@include('categoria.forms.usr')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
	@endsection