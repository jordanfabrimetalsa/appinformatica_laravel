<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'region_nombre',
        'region_ordinal'
    ];

    public function oficina(){
        return $this->hasMany('App\Models\Departamento\Oficina');
    }

    public function provincia(){
        return $this->hasMany('App\Models\Localizacion\Provincia');
    }

    public function empleado(){
        return $this->hasMany('App\Models\Empleado\Empleado');
    }

}
