<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'proveedores';

    // Llave primaria personalizada
    protected $primaryKey = 'id_proveedor';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'empresa',
        'telefono',
        'correo',
        'direccion',
    ];

    // Ocultar campos sensibles si es necesario
    protected $hidden = [];

    // Tipos de atributos
    protected $casts = [];
}
