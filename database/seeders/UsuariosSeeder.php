<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([ 
            'name' => 'Admin', 
            'email' => 'admin@example.com',  
            'password' => Hash::make('admin123'), 
            'remember_token' => null,  
            'created_at' => now(),  
            'updated_at' => now(),  
        ]);
    }
}
