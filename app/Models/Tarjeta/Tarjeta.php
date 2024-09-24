<?php

namespace App\Models\Tarjeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $table = "tarjeta";

    protected $fillable = [
        'idtarjeta',
        'idnivel',
        'codigo',
        'codigosys',
        'descripcion',
        'disponible',
        'created_time',
        'created_user',
        'updated_time',
        'updated_user',
        'condicion'
    ];

    public function asigtarjeta(){
        return $this->hasOne('App\Models\Tarjeta\AsigTarjeta');
    }

    public function Nivel(){
        return $this->belongsToMany('App\Models\Tarjeta\Nivel');
    }    
}
