<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaAsignacion extends Model
{
    use HasFactory;

    protected $table = "tarea_asignacion";

    protected $fillable = [
        'id_tarea',
        'id_empleado',
        'ccosto',
        'fecha_desde',
        'fecha_hasta',
        'titulo',
        'descripcion',
        'asigna_jefe',
        'estado',
        'fecha_creacion',
        'fecha_actualizacion',
        'comentario',
        'porcentaje',
        'prioridad',
        'archivo',
        'id_empleado_creacion',
        'resta_hora'
    ];

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado');
    }
}
