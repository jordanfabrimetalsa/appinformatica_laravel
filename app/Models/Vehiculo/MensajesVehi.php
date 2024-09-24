<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajesVehi extends Model
{
    use HasFactory;

    protected $table = "mensajes_ve";

    protected $primaryKey = "idmensaje_ve";

    protected $filleable = [
        'idmensaje_ve',
        'idgestion_ve',
        'titulo',
        'descripcion',
        'created_time',
        'created_user'
    ];

    public function tGestion(){
        return $this->belongsTo('App\Models\Vehiculo\TGestion');
    }
}
