<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
protected $table = 'clientes';
	protected $fillable =[
	'nombre','calle','numero','colonia','poblacion','codigo_postal','estado','nombre_contacto','telefono','correo'
	];

}
