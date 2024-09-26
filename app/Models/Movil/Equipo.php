<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipo";

    protected $primaryKey = "idequipo";

    public $timestamps = false;

    protected $fillable = [
        'idequipo',
        'imei',
        'serial',
        'caja',
        'create_user',
        'updated_user',
        'condicion',
        'estado',
        'disponible',
        'iddetalle',
        'detalle'
    ];

    public function detalle(){
        return $this->belongsTo('App\Models\Movil\Detalle', 'iddetalle', 'iddetalle');
    }

    public function asignacion(){
        return $this->hasOne('App\Models\Movil\Asignacion');
    }
}
