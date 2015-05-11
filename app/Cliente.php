<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
protected $table = 'clientes';
	protected $fillable =[
	'nombre','calle','numero','colonia','poblacion','codigo_postal','estado','nombre_contacto','telefono','correo'
	];
	public function scopeNombre($query, $nombre)
	{
		if(trim($nombre)!="")
		{
			$nombre=str_replace("*", "%", $nombre);
			$query->where('nombre','LIKE',$nombre);
		}
	}

	public function scopeTelefono($query, $telefono)
	{
		if(trim($telefono)!="")
		{
			$telefono=str_replace("*", "%", $telefono);
			$query->where('telefono','LIKE',$telefono);
		}
	}

}
