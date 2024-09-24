<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = "dispositivo";

    protected $fillable = [
        'iddispositivo',
        'marca',
        'modelo',
        'tdispositivo',
        'ip',
        'serial',
        'maclan',
        'macwifi',
        'factura',
        'fvencimiento_garantia',
        'observaciones',
        'condicion',
        'estado',
        'disponible'
    ];
}
