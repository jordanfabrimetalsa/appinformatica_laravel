<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComputador extends Model
{
    use HasFactory;

    protected $table = "tcomputador";

    protected $primaryKey = "idtcomputador";

    protected $fillable = [
        'idtcomputador',
        'nombre',
        'condicion'
    ];

    public function computador(){
        return $this->hasMany('App\Models\Computador\Computador');
    }
}
