<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'provincia_id',
        'provincia_nombre',
        'region_id'
    ];

    public function comuna(){
        return $this->hasMany('App\Models\Localizacion\Comuna');
    }

    public function region(){
        return $this->belongsTo('App\Models\Localizacion\Region');
    }

    public function oficina(){
        return $this->hasMany('App\Models\Departamento\Oficina');
    }

    public function empleado(){
        return $this->hasMany('App\Models\Empleado\Empleado');
    }
}
