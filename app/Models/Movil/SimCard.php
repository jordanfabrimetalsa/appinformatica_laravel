<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'idsimcard',
        'serial',
        'numero',
        'pin',
        'puk',
        'idoperador',
        'create_time',
        'updated_time',
        'created_user',
        'updated_user',
        'condicion',
        'disponbile'
    ];
}
