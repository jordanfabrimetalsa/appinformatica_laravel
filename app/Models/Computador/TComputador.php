<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComputador extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtcomputador',
        'nombre',
        'condicion'
    ];
}
