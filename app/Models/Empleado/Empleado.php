<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'idempleado',
        'nombre',
        'apellido',
        'tipo_documento',
        'num_documento',
        'licencia',
        'vencimiento_carnet',
        'fecha_nac',
        'direccion',
        'movil',
        'residencial',
        'email',
        'email_corporativo',
        'imagen',
        'base64',
        'condicion',
        'create_time',
        'updated_time',
        'idcargo',
        'idcomunas',
        'idprovincias',
        'idregiones',
        'idoficina_departamento',
        'emailEmpresa'
    ];

}
