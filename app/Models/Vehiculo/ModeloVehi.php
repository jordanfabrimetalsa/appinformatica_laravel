<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloVehi extends Model
{
    use HasFactory;

    protected $fillable = [
        'idmodelove',
        'nombre',
        'idmarca',
        'condicion'
    ];

    public function marca(){
        return $this->belongsTo('App\Models\Vehiculo\MarcaVehi');
    }

    public function vehiculo(){
        return $this->hasMany('App\Models\Vehiculo\Vehiculo');
    }
}
