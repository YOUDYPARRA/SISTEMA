@extends('app')

@section('content')

<h1>REGISTRO CLIENTE</h1>
{!! Form::open(['route'=>'clientes.store'])!!}


@include('clientes.partials.Form')

<div class='form-group'>

	{!! Form::button('Generar',['type'=>'submit','class'=>'btn btn-primary'])!!}

</div>
{!!Form::close()!!}

@endsection()