<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaCom extends Model
{
    use HasFactory;

    protected $table = "marcacom";

    protected $fillable = [
        'idmarcacomp',
        'nombre',
        'condicion'
    ];
}
