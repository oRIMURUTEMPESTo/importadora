<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'prestamos';

    // Llave primaria
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'id_proveedor',
        'monto_total',
        'monto_pagado',
        'fecha_prestamo',
        'fecha_limite',
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
        'fecha_prestamo' => 'datetime',
        'fecha_limite' => 'datetime',
    ];
}
