<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Admin',
            'usuario' => 'admin',
            'password' => Hash::make('admin123'),
            'correo' => 'admin@example.com',
            'cel' => '1234567890',
            'rango' => 'Administrador',
            'estado' => 1,
        ]);
    }
}
