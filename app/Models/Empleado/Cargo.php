<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcargos',
        'nombre',
        'iddepartamento'
    ];


    public function departamento(){
        return $this->belongsToMany('App\Models\Departamento\Departamento');
    }

    public function cargoJornada(){
        return $this->hasOne('App\Models\CargoJornada');
    }

    public function empleado(){
        return $this->hasMany('App\Models\Empleado\Empleado');
    }
}
