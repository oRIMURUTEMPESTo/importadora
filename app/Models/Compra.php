<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'compras';

    // Llave primaria personalizada (opcional, si se usa 'id' no es necesario definir esto)
    protected $primaryKey = 'id';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_proveedor',
        'monto_total',
        'fecha_compra',
        'detalles',
    ];

    // Relación con proveedores
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    // Ocultar campos sensibles si es necesario
    protected $hidden = [];

    // Tipos de atributos
    protected $casts = [
        'fecha_compra' => 'datetime',
    ];
}
