<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        DB::table('proveedores')->insert([
            [
                'nombre' => 'Proveedor 1',
                'empresa' => 'Empresa 1',
                'telefono' => '1234567891',
                'correo' => 'proveedor1@example.com',
                'direccion' => 'Dirección 1',
            ],
            [
                'nombre' => 'Proveedor 2',
                'empresa' => 'Empresa 2',
                'telefono' => '1234567892',
                'correo' => 'proveedor2@example.com',
                'direccion' => 'Dirección 2',
            ],
            [
                'nombre' => 'Proveedor 3',
                'empresa' => 'Empresa 3',
                'telefono' => '1234567893',
                'correo' => 'proveedor3@example.com',
                'direccion' => 'Dirección 3',
            ],
            [
                'nombre' => 'Proveedor 4',
                'empresa' => 'Empresa 4',
                'telefono' => '1234567894',
                'correo' => 'proveedor4@example.com',
                'direccion' => 'Dirección 4',
            ],
            [
                'nombre' => 'Proveedor 5',
                'empresa' => 'Empresa 5',
                'telefono' => '1234567895',
                'correo' => 'proveedor5@example.com',
                'direccion' => 'Dirección 5',
            ],
        ]);
    }
}
