<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TComputador extends Model
{
    use HasFactory;

    protected $table = "tcomputador";

    protected $primaryKey = "idtcomputador";

    public $timestamps = false;

    protected $fillable = [
        'idtcomputador',
        'nombre',
        'condicion'
    ];

    public function tcomputador(){
        return $this->hasMany('App\Models\Computador\Computador');
    }
}
