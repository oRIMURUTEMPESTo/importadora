<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialPagosTable extends Migration
{
    public function up()
    {
        Schema::create('historial_pagos', function (Blueprint $table) {
            $table->id();  // Identificador del historial de pago
            $table->unsignedBigInteger('id_cliente')->nullable();  // Llave foránea a clientes
            $table->unsignedBigInteger('id_proveedor')->nullable();  // Llave foránea a proveedores
            $table->decimal('monto_pago', 10, 2);  // Monto del pago
            $table->timestamp('fecha_pago')->useCurrent();  // Fecha del pago
            $table->string('tipo_pago')->nullable();  // Tipo de pago (efectivo, transferencia, etc.)
            $table->text('observaciones')->nullable();  // Observaciones adicionales

            $table->timestamps();

            // Definir llaves foráneas
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_pagos');
    }
}
