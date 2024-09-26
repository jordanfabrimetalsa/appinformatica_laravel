<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = "cargos";

    protected $primaryKey = "idcargos";

    public $timestamps = false;

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
