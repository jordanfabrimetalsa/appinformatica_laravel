<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionVehi extends Model
{
    use HasFactory;

    protected $table = "gestion_ve";

    protected $primaryKey = "idgestion_ve";

    public $timestamps = false;

    protected $filleable = [
        'idgestion_ve',
        'idvehiculo',
        'idtgestion',
        'condicion',
        'created_time',
        'created_user',
        'updated_time',
        'updated_user',
        'closed_time',
        'closed_user'
    ];

    public function vehiculo(){
        return $this->belongsTo('App\Models\Vehiculo\Vehiculo', 'idvehiculo', 'idvehiculo');
    }

    public function tgestion(){
        return $this->belongsTo('App\Models\Vehiculo\TGestion', 'idtgestion', 'idtgestion_ve');
    }
}
