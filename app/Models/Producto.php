<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Nombre de la tabla
    protected $primaryKey = 'id_productos'; // Clave primaria

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_categoria', // Relación con la tabla categorías
        'fecha_ingreso',
        'precio',
        'costo',
        'estado',
        'id_creador', // Relación con la tabla usuarios
        'id_compra', // Relación con la tabla compras
        'id_venta', // Relación con la tabla ventas
    ];

    // Relación con el modelo de categorías
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

    // Relación con el modelo de usuarios
    public function creador()
    {
        return $this->belongsTo(Usuario::class, 'id_creador', 'id_usuario');
    }

    // Relación con el modelo de compras (si aplica)
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra');
    }

    // Relación con el modelo de ventas (si aplica)
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }

    // Método personalizado para obtener el estado del producto
    public function esActivo()
    {
        return $this->estado ? 'Activo' : 'Inactivo';
    }
}
