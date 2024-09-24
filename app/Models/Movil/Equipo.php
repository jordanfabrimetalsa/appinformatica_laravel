<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipo";

    protected $fillable = [
        'idequipo',
        'imei',
        'serial',
        'caja',
        'create_user',
        'updated_user',
        'create_time',
        'updated_time',
        'condicion',
        'estado',
        'disponible',
        'iddetalle',
        'detalle'
    ];

    public function detalle(){
        return $this->belongsTo('App\Models\Movil\Detalle');
    }

    public function asignacion(){
        return $this->hasOne('App\Models\Movil\Asignacion');
    }
}
