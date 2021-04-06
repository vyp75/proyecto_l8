<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_art' => $this->faker->unique()->ean13(),
            'descripcionarticulo' => $this->faker->unique()->country(),
            'precio' => $this->faker->randomFloat(2,1,30),
            'id' => 1,
        ];
    }
}
