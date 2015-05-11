@extends('app')

@section('content')
<div class='panel panel-default'>
<a class='btn btn-success btn-xs' href="/clientes/create">AGREGAR NUEVO</a>
<div class='col-sm-6'>
	<div class='form-group'>
		
			{!! Form::model(Request::all(),['route'=>'clientes.index','method'=>'GET']) !!}
			<div class='form-group'>
				{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'NOMBRE'])!!}
			</div>
			<div class='form-group'>
				{!!Form::text('telefono',null,['class'=>'form-control floating-label','placeholder'=>'TELEFONO'])!!}
			</div>
		{!! Form::button('BUSCAR',['type'=>'submit','class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
	</div>

</div>

	<div class='panel-heading'>LISTADO CLIENTES</div>
	<h4> TOTAL: {!! $clientes->total(); !!} </h4>
	<table class='table table-responsive table-bordered'>
		<thead>
			<tr>
				<th>NOMBRE CLIENTE</th>
				<th>OPCIONES</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
				<tr>
					
					<td><a href="/clientes/{{ $cliente->id }}">{{ $cliente->nombre }}</a></td>
					<td><a class='btn btn-warning btn-xs' href="/clientes/{{ $cliente->id }}/edit">EDITAR</a> 
					<a class='btn btn-success btn-xs' href="/clientes/{{ $cliente->id }}">DETALLES</a> </td>
				</tr>
				@endforeach

		</tbody>

	</table>
	<div>
		{!! $clientes->appends(Request::only(['nombre','telefono']))->render() !!}

	</div>
</div>


@endsection