<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVehiculo extends Model
{
    use HasFactory;

    protected $table = 'tvehiculo';

    protected $primaryKey = "idtvehiculo";
    
    public $timestamps = false;

    protected $filleable = [
        'idtvehiculo',
        'nombre',
        'condicion'
    ];

    public function vehiculo(){
        return $this->hasMany('App\Models\Vehiculo');
    }
}
