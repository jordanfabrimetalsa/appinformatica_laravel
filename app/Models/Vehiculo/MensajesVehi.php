<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajesVehi extends Model
{
    use HasFactory;

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
