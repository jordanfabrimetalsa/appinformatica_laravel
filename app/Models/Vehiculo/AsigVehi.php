<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigVehi extends Model
{
    use HasFactory;

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
}
