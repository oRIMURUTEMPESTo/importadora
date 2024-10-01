<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'nombre' => 'Cables',
                'descripcion' => 'Cables para audio, video y poder.',
                'id_creador' => 1,
                'estado' => 1,
            ],
            [
                'nombre' => 'Consolas',
                'descripcion' => 'Consolas de sonido y mezcla de diferentes marcas.',
                'id_creador' => 1,
                'estado' => 1,
            ],
            [
                'nombre' => 'Parlantes',
                'descripcion' => 'Parlantes activos y pasivos de distintas marcas y potencias.',
                'id_creador' => 1,
                'estado' => 1,
            ],
            [
                'nombre' => 'Micrófonos',
                'descripcion' => 'Micrófonos inalámbricos y no inalámbricos.',
                'id_creador' => 1,
                'estado' => 1,
            ],
        ]);
    }
}
