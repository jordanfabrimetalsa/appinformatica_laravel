<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;

    protected $table = "mensajes";

    protected $primaryKey = "idmensajes";

    public $timestamps = false;

    protected $fillable = [
        'idmensajes',
        'cuerpo',
        'created_time',
        'process_user',
        'idticket',
        'vistouser',
        'vistoadmin'
    ];

    public function ticket(){
        return $this->belongsTo('App\Models\Ticket\Ticket');
    }

    public function imagen(){
        return $this->hasMany('App\Models\Ticket\Imagen');
    }
}
