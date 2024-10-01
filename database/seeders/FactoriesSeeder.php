<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Producto;

class FactoriesSeeder extends Seeder
{
    public function run()
    {
        // Crear 30 clientes utilizando el factory de Cliente
        Cliente::factory()->count(30)->create();

        // Crear productos usando el factory de Producto
        Producto::factory()->count(200)->create(); // Puedes ajustar la cantidad según necesites
    }
}
