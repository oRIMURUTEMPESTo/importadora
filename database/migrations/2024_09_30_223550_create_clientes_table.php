<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');  // Identificador del cliente
            $table->string('nombre');  // Nombre del cliente
            $table->string('correo')->unique();  // Correo del cliente
            $table->string('cel', 15);  // Número de teléfono
            $table->string('direccion')->nullable();  // Dirección del cliente
            $table->string('empresa')->nullable();  // Nombre de la empresa (si aplica)
            $table->boolean('estado')->default(1);  // Activo o Inactivo
            $table->timestamps();  // created_at y updated_at automáticos
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
