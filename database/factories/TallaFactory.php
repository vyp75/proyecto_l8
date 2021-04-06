<?php

namespace Database\Factories;

use App\Models\Talla;
use Illuminate\Database\Eloquent\Factories\Factory;

class TallaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Talla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talla' => $this->faker->unique()->randomElement([
                'XXS','XS', 'S', 'M', 'L', 'XL', 'XXL', '30', '31', '32', '33', '34'
                , '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46']),
        ];
    }
}
