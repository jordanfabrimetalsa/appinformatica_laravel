<?php

namespace App\Models\Localizacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = "provincias";

    protected $primaryKey = "provincia_id";

    public $timestamps = false;
    
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
