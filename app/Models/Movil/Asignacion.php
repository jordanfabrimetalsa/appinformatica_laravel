<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $table = "asignacion";

    protected $primaryKey = "idasignacion";

    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'idequipo',
        'idempleado',
        'idchip',
        'tasignacion',
        'contrato',
        'acta',
        'devolucion',
        'detalle',
        'created_user',
        'updated_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];

    public function equipo(){
        return $this->belongsTo('App\Models\Movil\Equipo', 'idequipo', 'idequipo');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado', 'idempleado', 'idempleado');
    }

    public function chip(){
        return $this->belongsTo('App\Models\Movil\Chip', 'idchip', 'idchip');
    }

}
