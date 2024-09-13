<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableReserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idresponsable',
        'nombre',
        'emailEmpresa',
        'condicion'
    ];
}
