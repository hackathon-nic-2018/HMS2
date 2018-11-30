<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PisoModel extends Model
{
	public function habitaciones()
	{
		return $this->hasOne('App\HabitacionModel');
	}
}
