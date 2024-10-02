<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_productos');  // Identificador del producto
            $table->string('nombre');  // Nombre del producto
            $table->text('descripcion')->nullable();  // Descripción del producto
            $table->foreignId('id_categoria')
                ->constrained('categorias', 'id_categoria')  // Relación con la categoría
                ->onDelete('cascade');  // Eliminar productos si se elimina la categoría
            $table->timestamp('fecha_ingreso')->useCurrent();  // Fecha de ingreso
            $table->decimal('precio', 10, 2);  // Precio del producto
            $table->decimal('costo', 10, 2);  // Costo del producto
            $table->boolean('estado')->default(1);  // Estado del producto

            // Relación con la tabla users
            $table->foreignId('id_creador')
                ->constrained('users', 'id')  // Cambiar 'usuarios' a 'users'
                ->onDelete('cascade'); 

            // Relación con compras y ventas
            $table->foreignId('id_compra')->nullable()
                ->constrained('compras')
                ->onDelete('set null');  // Dejar en null si se elimina la compra
            $table->foreignId('id_venta')->nullable()
                ->constrained('ventas')
                ->onDelete('set null');  // Dejar en null si se elimina la venta

            $table->timestamps();  // Timestamps automáticos
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
