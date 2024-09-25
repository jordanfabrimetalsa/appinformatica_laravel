<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaCom extends Model
{
    use HasFactory;

    protected $table = "marcacom";

    protected $primaryKey = "idmarcacomp";

    public $timestamps = false;

    protected $fillable = [
        'idmarcacomp',
        'nombre',
        'condicion'
    ];

    public function marca(){
        return $this->hasMany('App\Models\Computador\Computador');
    }
    
}
