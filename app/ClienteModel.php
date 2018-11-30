<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{ 
	protected $fillable = [
        'nombre', 'apellido', 'identificacion', 'telefono', 'correo', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'idcliente'
    ];

	public function reservaciones(){
		return $this->hasMany('App\ClienteModel');
	}
}
