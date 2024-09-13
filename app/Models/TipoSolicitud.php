<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSolicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtipo_solicitud',
        'iddepartamento',
        'nombre',
        'descripcion',
        'html',
        'condicion',
        'created_time',
        'updated_time'
    ];
}
