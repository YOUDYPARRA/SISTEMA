@extends('app')

@section('content')

<h3>Editar cliente: {{ $cliente->nombre }}</h3>

{!! Form::model($cliente,['method'=>'PATCH', 'action'=>['ClienteController@update',$cliente->id] ]) !!}

@include('clientes.partials.Form')


<div class='form-group'>
	{!!Form::button('GUARDAR CAMBIOS',['type'=>'submit','class'=>'btn btn-primary'])!!}
</div>

{!! Form::close()!!}

@endsection()