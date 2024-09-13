<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigTarjeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'idasigtarjeta',
        'idempleado',
        'acta',
        'devolucion',
        'created_time',
        'created_user',
        'closed_time',
        'closed_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];
}
