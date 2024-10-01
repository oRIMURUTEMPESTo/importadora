<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosSeeder::class,
            ProveedoresSeeder::class,
            CategoriasSeeder::class,
            FactoriesSeeder::class, // Agrega el seeder de factories
        ]);
    }
}
