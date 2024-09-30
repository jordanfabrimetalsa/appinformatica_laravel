<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGestion extends Model
{
    use HasFactory;

    protected $table = "tgestion_ve";

    protected $primaryKey = "idtgestion_ve";

    public $timestamps = false;

    protected $filleable = [
        'idtgestion_ve',
        'titulo',
        'descripcion',
        'condicion'
    ];

    public function mensajeVehi(){
        return $this->hasMany('App\Models\Vehiculo\MensajesVehi');
    }

    public function gestionVehi(){
        return $this->hasMany('App\Models\Vehiculo\TGestion');
    }
}
