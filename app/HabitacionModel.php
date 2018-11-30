<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitacionModel extends Model
{
    public function reservaciones()
    {
    	return $this->hasOne('App\ReservacionModel');
    }

    public function tipos_habitaciones()
    {
    	return $this->hasOne('App\Tipo_habitacionModel');
    }

    public function pisos()
    {
    	return $this->belongsTo('App\PisoModel');
    }
}
