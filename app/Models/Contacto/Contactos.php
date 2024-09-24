<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;

    protected $table = "contactos";

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
