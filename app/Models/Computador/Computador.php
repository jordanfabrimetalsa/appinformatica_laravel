<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcomputador',
        'idmarca',
        'modelo',
        'tcomputador',
        'serial',
        'precio',
        'maclan',
        'macwifi',
        'factura',
        'fvencimiento_garantia',
        'observaciones',
        'condicion',
        'estado',
        'disponible',
        'detalle'
    ];
}
