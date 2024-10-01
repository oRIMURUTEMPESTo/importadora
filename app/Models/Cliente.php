<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nombre de la tabla
    protected $primaryKey = 'idCliente'; // Clave primaria

    protected $fillable = [
        'nombre',
        'correo',
        'cel',
        'direccion',
        'empresa',
        'estado',
    ];

    // Relación con el modelo de préstamos
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'id_cliente');
    }

    // Método personalizado para obtener el estado del cliente
    public function esActivo()
    {
        return $this->estado ? 'Activo' : 'Inactivo';
    }
}
