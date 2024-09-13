<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    use HasFactory;

    protected $fillable = [
        'comunas_id',
        'comuna_nombre',
        'provincia_id'
    ];
}
