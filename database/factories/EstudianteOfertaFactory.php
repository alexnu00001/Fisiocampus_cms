<?php

namespace Database\Factories;

use App\Models\EstudianteOferta;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteOfertaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EstudianteOferta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estudiante_id' => $this->faker->randomDigitNotNull,
        'oferta_id' => $this->faker->randomDigitNotNull,
        'estatus_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
