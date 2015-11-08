@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

	@section('content')
	<table class="table">
		<thead>
			<th>Nombre Categoria</th>
			<th>Opciones</th>
		</thead>
		@foreach($categorias as $categoria)
			<tbody>
				<td>{{$categoria->c_nombre}}</td>
				<td>
				{!!link_to_route('categoria.edit', $title = 'Editar', $parameters = $categoria, $attributes = ['class'=>'btn btn-primary'])!!}
				
				</td>
				<td>
				{!!Form::open(['route'=>['categoria.destroy', $categoria], 'method' => 'DELETE'])!!}
			    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		        {!!Form::close()!!}
				</td>
			</tbody>
		@endforeach

	</table>
	{!!$categorias->render()!!}
	@endsection
	