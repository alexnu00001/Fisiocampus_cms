<?php

namespace Database\Factories;

use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'linea_1' => $this->faker->word,
        'linea_2' => $this->faker->word,
        'pais_id' => $this->faker->randomDigitNotNull,
        'codigo_postal' => $this->faker->word,
        'provincia' => $this->faker->word,
        'ciudad' => $this->faker->word,
        'referencia' => $this->faker->word,
        'alias' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
