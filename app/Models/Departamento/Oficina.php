<?php

namespace App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $table = "oficinas";

    protected $primaryKey = "idoficinas";

    public $timestamps = false;

    protected $fillable = [
        'idoficinas',
        'nombre',
        'direccion',
        'idcomunas',
        'idregiones',
        'idprovincias'
    ];

    public function region(){
        return $this->belongsTo('App\Models\Localizacion\Region', 'idregiones', 'region_id');
    }
    
    public function provincia(){
        return $this->belongsTo('App\Models\Localizacion\Provincia', 'idprovincias', 'provincia_id');
    }

    public function comuna(){
        return $this->belongsTo('App\Models\Localizacion\Comuna', 'idcomunas', 'comuna_id');
    }

    public function tecnicoOficina(){
        return $this->hasMany('App\Models\Departamento\TecnicoOficina');
    }

    public function anexo(){
        return $this->hasMany('App\Models\Anexo');
    }

    public function oficinaDepartamento(){
        return $this->hasMany('App\Models\Departamento\OficinaDepartamento');
    }


}
