<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservacionModel extends Model
{
    public function clientes()
    {
    	return $this->belongsTO('App\ClienteModel');
    }

    public function facturas()
    {
    	return $this->hasOne('App\FacturaModel');
    }

    public function habitaciones()
    {
    	return $this->hasOne('App\HabitacionModel');
    }
}
