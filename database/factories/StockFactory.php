<?php

namespace Database\Factories;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_art' => $this->faker->randomElement([
                7523316326433,835467722840,9239039891933,6528559521189,7981291732159,8097418480557,570140649587,1269798319759,
                641690248282,8276795827630,3643747958806,8917726964528,6111958837977,6840955025901,5641925619721,129587676542,
                3069064022325,223122213305,6900421506003,9679367975743,1641132010995,4036462138094,2034459414581,8813763313476,
                7614228079446,3754814349578,1827747650348,5702621187140,5505366469430,2894557789215,4530878491748,3475419046937,
                4949641382600,589644589909,5427107812445,1962067292028,55684023555,7181196256914,5609942424193,6389408577043,
                3274452163072,7333492193985,8107137131644,3259223508221,7250682261944,7020489226251,8195382313861,562967665734,
                3395821328868,8268087495832,
                    ]),
            'id_color' => $this->faker->numberBetween(1,50),
            'id_talla' => $this->faker->numberBetween(1,20),
            'unidades'=> $this->faker->numberBetween(0,200),
        ];
    }
}
