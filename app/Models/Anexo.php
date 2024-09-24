<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Anexos extends Model
{
    use HasFactory;

    protected $table = "anexos";

    protected $primaryKey = "idanexos";

    protected $fillable = [
        'idanexos',
        'numero',
        'vigencia',
        'idempleado',
        'idoficina'
    ];

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado');
    }

    public function oficina(){
        return $this->belongsTo('App\Models\Departamento\Oficina');
    }
    
}
