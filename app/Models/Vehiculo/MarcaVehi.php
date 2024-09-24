<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaVehi extends Model
{
    use HasFactory;

    protected $table = "marcave";

    protected $primaryKey = "idmarca";

    public $timestamps = false;

    protected $fillable = [
        'idmarca',
        'nombre',
        'condicion'
    ];

    public function modelo(){
        return $this->hasMany('App\Models\Vehiculo\ModeloVehi');
    }

    public function vehiculo(){
        return $this->hasMany('App\Models\Vehiculo\Vehiculo');
    }
}
