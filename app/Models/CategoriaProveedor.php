<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProveedor extends Model
{
    use HasFactory;

    protected $table = "categoria_proveedor";

    protected $fillable = ['idcategoria','nombre'];
}
