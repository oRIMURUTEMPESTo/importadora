<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nombre de la tabla
    protected $table = 'usuarios';

    // Llave primaria personalizada
    protected $primaryKey = 'id_usuario';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'usuario',
        'password',
        'correo',
        'cel',
        'rango',
        'estado',
    ];

    // Ocultar estos atributos al serializar
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Tipos de atributos
    protected $casts = [
        'correo_verified_at' => 'datetime',
        'estado' => 'boolean',
    ];
}
