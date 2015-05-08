@extends('app')

@section('content')
<div class='panel panel-default'>

	<div class='panel-heading'>LISTADO CLIENTES</div>

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

</div>


@endsection