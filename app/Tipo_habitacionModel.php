<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_habitacionModel extends Model
{
    public function habitaciones()
    {
    	return $this->hasOne('App\HabitacionModel');
    }
}
