@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
			    <th>Portada</th>
				<th>Nombre</th>
				<th>Autor</th>
				<th>Categoria</th>
				<th>Editorial</th>
				<th>Paginas</th>
				<th>Año</th>
				<th>Precio</th>
				<th>Operaciones</th>
			</thead>

			@foreach($libros as $libro)
				<tbody>
				    <td>
						<img src="libros/{{$libro->portada}}" alt="" style="width:100px;"/>
					</td>
					<td>{{$libro->nombre}}</td>
					<td>{{$libro->autor}}</td>
					<th>{{$libro->c_nombre}}</th>
					<td>{{$libro->editorial}}</td>
					<td>{{$libro->paginas}}</td>
					<td>{{$libro->anyo}}</td>
					<td>{{$libro->precio}}</td>
				<td>
						{!!link_to_route('libro.edit', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>	
				
				<td>
				{!!Form::open(['route'=> ['libro.destroy',$libro->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
				</td>
				</tbody>
			@endforeach
		</table>
	@endsection