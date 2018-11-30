<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaModel extends Model
{
	public function reservaciones()
	{
		return $this->hasOne('App\ReservacionModel');
	}
}