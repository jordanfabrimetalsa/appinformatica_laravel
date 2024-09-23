<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVehiculo extends Model
{
    use HasFactory;

    protected $table = 'tvehiculo';
    protected $filleable = [
        'idtvehiculo',
        'nombre',
        'condicion'
    ];

    public function vehiculo(){
        return $this->hasMany('App\Models\Vehiculo');
    }
}
