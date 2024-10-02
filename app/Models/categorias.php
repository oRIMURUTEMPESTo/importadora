<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'categorias';

    // Clave primaria personalizada
    protected $primaryKey = 'id_categoria';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_creador',
        'estado',
    ];

    // Relación con el modelo Usuario
    public function creador()
    {
        return $this->belongsTo(User::class, 'id_creador', 'id_usuario');
    }
}
