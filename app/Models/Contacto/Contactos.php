<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidcontacto',
        'cidproveedor',
        'cnombre',  
        'cnumero',
        'ccorreo',
        'chorario',  
        'ccategoria',
        'cobservacion'
    ];
}
