@extends('app')

@section('content')

<p>LISTADO CLIENTES</p>

@foreach($clientes as $cliente)
<article>
	<h2>
		<a href="/clientes/{{ $cliente->id }}">{{ $cliente->nombre }}</a>
	</h2>
</article>
@endforeach

@endsection