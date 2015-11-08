<div class="form-group">
	{!!Form::label('nombre','Titulo:')!!}
	{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Titulo del libro'])!!}
</div>

<div class="form-group">
	{!!Form::label('autor','Autor:')!!}
	{!!Form::text('autor',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Autor del libro'])!!}
</div>


<div class="form-group">
	{!!Form::label('editorial','Editorial:')!!}
	{!!Form::text('editorial',null,['class'=>'form-control', 'placeholder'=>'Ingresa la editorial del libro'])!!}
</div>

<div class="form-group">
	{!!Form::label('paginas','Paginas:')!!}
	{!!Form::text('paginas',null,['class'=>'form-control', 'placeholder'=>'Ingresa el numero de paginas del libro'])!!}
</div>

<div class="form-group">
	{!!Form::label('anyo','Año:')!!}
	{!!Form::text('anyo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Año del libro'])!!}
</div>

<div class="form-group">
	{!!Form::label('precio','Precio:')!!}
	{!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Precio del libro'])!!}
</div>



<div class="form-group">
	{!!Form::label('portada','Portada:')!!}
	{!!Form::file('portada')!!}
</div>
<div class="form-group">
	{!!Form::label('categoria_id','Categoria:')!!}
	{!!Form::select('categoria_id',$categorias)!!}
</div>