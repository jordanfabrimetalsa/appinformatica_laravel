<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $primaryKey = "idvehiculo";

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


    public function marca(){
        return $this->belongsTo('App\Models\Vehiculo\MarcaVehi');
    }

    public function tVehiculo(){
        return $this->belongsToMany('App\Models\Vehiculo\TVehiculo');
    }

    public function modelo(){
        return $this->belongsTo('App\Models\Vehiculo\ModeloVehi');
    }
}
