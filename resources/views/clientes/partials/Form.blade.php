<div class='col-sm-6'>
	
	<div class='form-group'>
		{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'NOMBRE'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('calle',null,['class'=>'form-control floating-label','placeholder'=>'CALLE'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('numero',null,['class'=>'form-control floating-label','placeholder'=>'NUMERO'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('colonia',null,['class'=>'form-control floating-label','placeholder'=>'COLONIA'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('poblacion',null,['class'=>'form-control floating-label','placeholder'=>'POBLACION'])!!}
	</div>
</div>
<div class='col-sm-6'>
	<div class='form-group'>
		{!!Form::text('codigo_postal',null,['class'=>'form-control floating-label','placeholder'=>'CODIGO POSTAL'])!!}
	</div>
	<div class='form-group'>
		{!! Form::select('estado',['mexico'=>'MEXICO','distrito federal'=>'DISTRITO FEDERAL','hidalgo'=>'HIDALGO'],null,
		['class'=>'form-control floating-label','placeholder'=>'ESTADO']) !!}
	</div>
	<div class='form-group'>
		{!!Form::text('nombre_contacto',null,['class'=>'form-control floating-label','placeholder'=>'CONTACTO'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('telefono',null,['class'=>'form-control floating-label','placeholder'=>'TELEFONO'])!!}
	</div>
	<div class='form-group'>
		{!!Form::text('correo',null,['class'=>'form-control floating-label','placeholder'=>'CORREO'])!!}
	</div>
</div>