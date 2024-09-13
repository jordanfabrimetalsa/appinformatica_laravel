<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaVehi extends Model
{
    use HasFactory;

    protected $fillable = [
        'idmarca',
        'nombre',
        'condicion'
    ];
}
