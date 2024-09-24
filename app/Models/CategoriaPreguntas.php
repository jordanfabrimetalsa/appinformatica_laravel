<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPreguntas extends Model
{
    use HasFactory;

    protected $table = "categoria_preguntas";

    protected $primaryKey = "idcategoria";

    protected $fillable = ['idcategoria', 'nombre', 'condicion'];
}
