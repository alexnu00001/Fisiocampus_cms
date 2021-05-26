<?php

namespace Database\Factories;

use App\Models\OfertaInscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaInscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OfertaInscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oferta_id' => $this->faker->randomDigitNotNull,
        'inscripcion_tipo_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
