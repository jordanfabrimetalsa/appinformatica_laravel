<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicoOficina extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtecofi',
        'idusuario',
        'idoficina'
    ];
}
