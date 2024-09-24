<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoJornada extends Model
{
    use HasFactory;

    protected $table = "cargo_jornada";

    protected $primaryKey = "id_cj";

    public $timestamps = false;

    protected $fillable = [
        'id_cj',
        'id_cargo',
        'jornada'
    ];

    public function cargo(){
        return $this->belongsToMany('App\Models\Empleado\Cargo');
    }
}
