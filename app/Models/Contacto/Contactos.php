<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;

    protected $table = "contactos";

    protected $primaryKey = "cidcontacto";

    protected $fillable = [
        'cidcontacto',
        'cidproveedor',
        'cnombre',  
        'cnumero',
        'ccorreo',
        'chorario',  
        'ccategoria',
        'cobservacion'
    ];

    public function contactoProveedores(){
        return $this->belongsTo('App\Models\Contacto\ContactoProveedor');
    }
}
