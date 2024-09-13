<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPreguntas extends Model
{
    use HasFactory;

    protected $fillable = ['idcategoria', 'nombre', 'condicion'];
}
