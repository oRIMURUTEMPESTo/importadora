<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'cel' => $this->generatePhoneNumber(), // Genera un número de teléfono de 12 dígitos
            'direccion' => $this->faker->address(),
            'empresa' => $this->faker->company(),
            'estado' => $this->faker->boolean(),
        ];
    }

    // Método para generar un número de teléfono de 12 dígitos
    private function generatePhoneNumber()
    {
        return '7' . mt_rand(100000000, 999999999); // Asegura que el número tenga 12 dígitos
    }
}
