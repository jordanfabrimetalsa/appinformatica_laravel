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
        'idasigtarjeta',
        'idtarjeta',
        'idempleado',
        'acta',
        'devolucion',
        'created_time',
        'created_user',
        'closed_time',
        'closed_user',
        'condicion',
        'pdf_entrega',
        'pdf_devolucion'
    ];

    public function tarjeta(){
        return $thisñ->belongsTo('App\Models\Tarjeta\Tarjeta');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado\Empleado');
    }


}
