<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    // Propiedad para almacenar el precio
    protected static $preciosGenerados = [];

    public function definition()
    {
        $productosPorCategoria = [
            1 => ['Cable XLR a TRS', 'Cable de audio RCA', 'Cable de micrófono XLR', 'Cable de guitarra Jack', 'Cable de altavoz de 12 metros'], // Cables
            2 => ['Yamaha MG10XU', 'Behringer Xenyx Q802USB', 'Allen & Heath ZED-10', 'Mackie 1202VLZ4', 'Soundcraft EFX8'], // Consolas
            3 => ['JBL Charge 5', 'Sony SRS-XB43', 'Bose SoundLink Flex', 'Ultimate Ears Boom 3', 'Harman Kardon Onyx Studio 5'], // Parlantes
            4 => ['Shure SM58', 'Rode NT1-A', 'Sennheiser e835', 'Audio-Technica AT2020', 'AKG C214'], // Micrófonos
        ];

        $categoriaId = $this->faker->randomElement(array_keys($productosPorCategoria));
        $productoNombre = $this->faker->randomElement($productosPorCategoria[$categoriaId]);

        // Generar o reutilizar el precio basado en el nombre del producto
        if (!isset(self::$preciosGenerados[$productoNombre])) {
            self::$preciosGenerados[$productoNombre] = $this->faker->randomFloat(2, 50, 1000);
        }

        return [
            'nombre' => $productoNombre,
            'descripcion' => $this->faker->text(100),
            'id_categoria' => $categoriaId,
            'fecha_ingreso' => $this->faker->dateTimeThisYear(),
            'precio' => self::$preciosGenerados[$productoNombre], // Usar el precio ya generado
            'costo' => $this->faker->randomFloat(2, 30, 800),
            'estado' => $this->faker->boolean(),
            'id_creador' => 1,
        ];
    }
}
