<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'idequipo',
        'imei',
        'serial',
        'caja',
        'create_user',
        'updated_user',
        'create_time',
        'updated_time',
        'condicion',
        'estado',
        'disponible',
        'iddetalle',
        'detalle'
    ];
}
