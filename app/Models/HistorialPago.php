<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialPago extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'historial_pagos';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'id_proveedor',
        'monto_pago',
        'fecha_pago',
        'tipo_pago',
        'observaciones',
    ];

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relación con el modelo Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    // Tipos de atributos
    protected $casts = [
        'fecha_pago' => 'datetime',
    ];
}
