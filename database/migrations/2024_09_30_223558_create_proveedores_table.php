<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('id_proveedor');  // Identificador del proveedor
            $table->string('nombre');  // Nombre del proveedor
            $table->string('empresa')->nullable();  // Nombre de la empresa (opcional)
            $table->string('telefono', 15)->nullable();  // Teléfono (opcional)
            $table->string('correo')->unique();  // Correo electrónico único
            $table->string('direccion')->nullable();  // Dirección (opcional)
            $table->timestamps();  // created_at y updated_at automáticos
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
