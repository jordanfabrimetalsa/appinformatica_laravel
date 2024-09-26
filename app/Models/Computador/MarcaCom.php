<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaCom extends Model
{
    use HasFactory;

    protected $table = "marcacom";

    protected $primaryKey = "idmarcacom";

    public $timestamps = false;

    protected $fillable = [
        'idmarcacom',
        'nombre',
        'condicion'
    ];

    public function marcacom(){
        return $this->hasMany('App\Models\Computador\Computador');
    }
}
