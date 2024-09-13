<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'idvehiculo',
        'idmarca',
        'idmodelo',
        'kilometraje',
        'ano',
        'patente',
        'serialmotor',
        'serialcarroceria',
        'gases',
        'tecnica',
        'circulacion',
        'tvehiculo',
        'observaciones',
        'condicion',
        'estado',
        'disponible',
        'gestion',
        'created_time',
        'updated_time'
    ];
}
