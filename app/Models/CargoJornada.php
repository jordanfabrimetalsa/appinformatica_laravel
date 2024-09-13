<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoJornada extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cj',
        'id_cargo',
        'jornada'
    ];
}
