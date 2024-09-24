<?php

namespace App\Models\Localizacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    use HasFactory;

    protected $table = "comunas";

    protected $primaryKey = "comunas_id";

    public $timestamps = false;

    protected $fillable = [
        'comunas_id',
        'comuna_nombre',
        'provincia_id'
    ];

    public function provincia(){
        return $this->belongsTo('App\Models\Localizacion\Provincia');
    }

    public function empleado(){
        return $this->hasMany('App\Models\Empleado\Empleado');
    }
    
    public function oficina(){
        return $this->hasMany('App\Models\Departamento\Oficina');
    }
}
