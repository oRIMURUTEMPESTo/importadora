<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'ventas';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'monto_total',
        'fecha_venta',
        'detalles',
    ];

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Tipos de atributos
    protected $casts = [
        'fecha_venta' => 'datetime',
    ];
}
