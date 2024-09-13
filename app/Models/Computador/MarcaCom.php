<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaCom extends Model
{
    use HasFactory;

    protected $fillable = [
        'idmarcacomp',
        'nombre',
        'condicion'
    ];
}
