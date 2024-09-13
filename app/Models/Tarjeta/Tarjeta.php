<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtarjeta',
        'idnivel',
        'codigo',
        'codigosys',
        'descripcion',
        'disponible',
        'created_time',
        'created_user',
        'updated_time',
        'updated_user',
        'condicion'
    ];
}
