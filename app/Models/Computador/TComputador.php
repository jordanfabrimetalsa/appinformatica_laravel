<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComputador extends Model
{
    use HasFactory;

    protected $table = "tcomputador";

    protected $fillable = [
        'idtcomputador',
        'nombre',
        'condicion'
    ];
}
