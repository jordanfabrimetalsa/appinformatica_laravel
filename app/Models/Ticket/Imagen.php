<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = "imagen";

    protected $fillable = [
        'idimagen',
        'file',
        'base64',
        'idmensaje'
    ];

    public function mensaje(){
        return $this->belongsTo('App\Models\Ticket\Mensaje');
    }
}
