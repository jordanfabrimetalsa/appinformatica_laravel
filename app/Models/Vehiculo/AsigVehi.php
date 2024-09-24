<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigVehi extends Model
{
    use HasFactory;

    protected $table = "asigvehi";

    protected $primaryKey = "idasigvehi";

    public $timestamps = false;

    protected $fillable = [
        'idasigvehi',
        'idvehiculo',
        'idempleado',
        'entregado',
        'created_time',
        'close_time',
        'created_user',
        'close_user',
        'condicion',
        'imagen_delantero',
        'imagen_trasero',
        'imagen_lateral_derecho',
        'imagen_lateral_izquierdo',
        'imagen_panel',
        'pdf_entrega',
        'pdf_devolucion',
        'asignacion'
    ];

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado');
    }

    public function revision(){
        return $this->belongsTo('App\Models\Vehiculo\Revision');
    }

    public function vehiculo(){
        return $this->belongsTo('App\Models\Vehiculo\Vehiculo');
    }

}
