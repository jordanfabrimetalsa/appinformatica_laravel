<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemReserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'iditem',
        'nombre',
        'color',
        'vigencia'
    ];

    public function reserva(){
        return $this->hasMany('App\Models\Reserva\Reserva');
    }
}
