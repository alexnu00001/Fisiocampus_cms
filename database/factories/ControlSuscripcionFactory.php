<?php

namespace Database\Factories;

use App\Models\ControlSuscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ControlSuscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ControlSuscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
        'descripcion' => $this->faker->text,
        'id_stripe' => $this->faker->word,
        'status' => $this->faker->word,
        'id_pais' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
