<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efectivo extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'efectivo';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'monto',
        'tipo',
        'activo',
        'descripcion',
        'fecha_transaccion',
    ];

    // Tipos de atributos
    protected $casts = [
        'fecha_transaccion' => 'datetime',
    ];

    // Lógica adicional o scopes pueden ser agregados aquí si es necesario
}
