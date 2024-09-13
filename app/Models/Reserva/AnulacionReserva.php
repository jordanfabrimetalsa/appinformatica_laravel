<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnulacionReserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idanulacion',
        'nombre',
        'condicion'
    ];
}
