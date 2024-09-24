<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    use HasFactory;

    protected $table = "revision";

    protected $fillable = [
        'idrevision',
        'idasigvehi',
        'tipo',
        'fecha',
        'kilometraje',
        'padron',
        'permiso',
        'revision',
        'seguro',
        'combustible',
        'selloverde',
        'tag',
        'radio',
        'parasoles',
        'gata',
        'rerueda',
        'luces',
        'frenos',
        'odometro',
        'velocimetro',
        'indicombus',
        'cambios',
        'tapestan',
        'direccion',
        'frenomano',
        'intermitente',
        'limparabrisas',
        'asientos',
        'pisos',
        'niveles',
        'parabrisas',
        'luneta',
        'puertas',
        'alzavidrios',
        'cenicero',
        'jaula',
        'motor',
        'observaciones'
    ];

    public function asigVehi(){
        return $this->belongsTo('App\Models\Vehiculo\AsigVehi');
    }
}
