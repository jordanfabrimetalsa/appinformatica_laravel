<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    protected $table = "detalle";

    protected $primaryKey = "iddetalle";

    protected $fillable = [
        'iddetalle',
        'marca',
        'modelo',
        'nombre',
        'precio',
        'color',
        'tipo'
    ];

    public function equipo(){
        return $this->hasMany('App\Models\Movil\Equipo');
    }
}
