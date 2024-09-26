<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;

    protected $table = "computador";
    
    protected $primaryKey = "idcomputador";

    public $timestamps = false;

    protected $fillable = [
        'idmarca',
        'modelo',
        'tcomputador',
        'serial',
        'precio',
        'maclan',
        'macwifi',
        'factura',
        'fvencimiento_garantia',
        'observaciones',
        'condicion',
        'estado',
        'disponible',
        'detalle'
    ];

    public function asigCompu(){
        return $this->hasOne('App\Models\Computador\AsigCompu');
    }

    public function marcacom(){
        return $this->belongsTo('App\Models\Computador\MarcaCom', 'idmarca', 'idmarcacom'); 
    }

    public function tcomputador(){
        return $this->belongsTo('App\Models\Computador\TComputador', 'tcomputador', 'idtcomputador'); 
    }

    public function gestionCompu(){
        return $this->hasOne('App\Models\Computador\GestionCompu');
    }
}
