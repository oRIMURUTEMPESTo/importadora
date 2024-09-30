<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');  // Identificador del usuario
            $table->string('nombre');
            $table->string('usuario')->unique();  // Nombre de usuario
            $table->string('password');  // Contraseña encriptada (convención)
            $table->string('correo')->unique();  // Correo único
            $table->string('cel', 15);  // Número de teléfono
            $table->string('rango');  // Rango de usuario
            $table->boolean('estado')->default(1);  // Activo o Inactivo
            $table->timestamps();  // created_at y updated_at automáticas
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
