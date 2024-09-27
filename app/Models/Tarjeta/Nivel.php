<?php

namespace App\Models\Tarjeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $table = "nivel";

    protected $primaryKey = "idnivel";

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion',
    ];

    public function tarjeta(){
        return $this->hasMany('App\Models\Tarjeta\Tarjeta');
    }
}
