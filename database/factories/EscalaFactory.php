<?php

namespace Database\Factories;

use App\Models\Escala;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscalaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escala::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'escala' => $this->faker->randomDigitNotNull,
        'plan_estudios_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
