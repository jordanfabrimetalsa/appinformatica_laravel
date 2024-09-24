<?php

namespace App\Models\Reserva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemReserva extends Model
{
    use HasFactory;

    protected $table = "item_reserva";

    protected $primaryKey = "iditem";

    public $timestamps = false;

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
