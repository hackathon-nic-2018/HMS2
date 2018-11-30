<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
	public function reservaciones(){
		return $this->hasMany('App\ClienteModel');
	}
}
