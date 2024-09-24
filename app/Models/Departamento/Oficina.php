<?php

namespace App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficinas extends Model
{
    use HasFactory;

    protected $table = "oficinas";

    protected $fillable = [
        'idoficinas',
        'nombre',
        'direccion',
        'idcomunas',
        'idregiones',
        'idprovincias',
        'vistoadmin'
    ];

    public function region(){
        return $this->belongsTo('App\Models\Localizacion\Region');
    }

    public function provincia(){
        return $this->belongsTo('App\Models\Localizacion\Provincia');
    }

    public function comuna(){
        return $this->belongsTo('App\Models\Localizacion\Comuna');
    }

    public function tecnicoOficina(){
        return $this->belongsToMany('App\Models\Departamento\TecnicoOficina');
    }

    public function anexo(){
        return $this->hasMany('App\Models\Anexo');
    }

    public function oficinaDepartamento(){
        return $this->hasMany('App\Models\Departamento\OficinaDepartamento');
    }


}
