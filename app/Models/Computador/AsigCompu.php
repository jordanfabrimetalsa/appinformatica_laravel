<?php

namespace App\Models\Computador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigCompu extends Model
{
    use HasFactory;

    protected $table = "asigcompu";
    
    protected $primaryKey = "idasigcompu";

    public $timestamps = false;

    protected $fillable = [
        'idasigcompu',
        'idcomputador',
        'idempleado',
        'nomequipo',
        'usuario',
        'pass',
        'ip',
        'so',
        'acta',
        'devolucion',
        'detalle',
        'created_time',
        'closed_time',
        'created_user',
        'closed_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado', 'idempleado', 'idempleado');
    }

    public function computador(){
        return $this->belongsTo('App\Models\Computador\Computador', 'idcomputador', 'idcomputador');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'created_user', 'id');
    }
}
