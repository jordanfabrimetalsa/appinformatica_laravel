<?php

namespace App\Models\Tarjeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsigTarjeta extends Model
{
    use HasFactory;

    protected $table = "asigtarjeta";

    protected $primaryKey = "idasigtarjeta";

    public $timestamps = false;

    protected $fillable = [
        'idtarjeta',
        'idempleado',
        'acta',
        'devolucion',
        'created_user',
        'closed_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];

    public function tarjeta(){
        return $this->belongsTo('App\Models\Tarjeta\Tarjeta', 'idtarjeta', 'idtarjeta');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado', 'idempleado', 'idempleado');
    }

}
