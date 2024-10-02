<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id_categoria');  // Identificador de la categoría
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->foreignId('id_creador')
                ->constrained('users', 'id')  // Cambiar 'usuarios' a 'users'
                ->onDelete('cascade');  // Eliminar categoría si se elimina el usuario
            $table->boolean('estado')->default(1);  // Estado de la categoría
            $table->timestamps();  // Incluye created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
