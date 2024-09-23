<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $filleable = [
        'idasginacion',
        'fecha',
        'idequipo',
        'idempleado',
        'idchip',
        'tasignacion',
        'contrato',
        'acta',
        'devolucion',
        'detalle',
        'created_time',
        'updated_time',
        'created_user',
        'updated_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];

    public function equipo(){
        return $this->belongsTo('App\Models\Movil\Equipo');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado');
    }

    public function chip(){
        return $this->belongsTo('App\Models\Movil\Chip');
    }

}
