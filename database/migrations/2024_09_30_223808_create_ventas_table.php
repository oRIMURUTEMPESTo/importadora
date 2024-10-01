<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();  // Identificador de la venta
            $table->foreignId('id_cliente')->constrained('clientes', 'id_cliente')->onDelete('cascade');  // Relación con clientes
            $table->decimal('monto_total', 10, 2);  // Monto total de la venta
            $table->timestamp('fecha_venta')->useCurrent();  // Fecha de la venta
            $table->text('detalles')->nullable();  // Detalles adicionales si es necesario
            $table->timestamps();  // created_at y updated_at automáticos
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
