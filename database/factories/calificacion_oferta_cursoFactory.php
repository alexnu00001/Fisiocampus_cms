<?php

namespace Database\Factories;

use App\Models\calificacion_oferta_curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class calificacion_oferta_cursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = calificacion_oferta_curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oferta_id' => $this->faker->randomDigitNotNull,
        'curso_id' => $this->faker->randomDigitNotNull,
        'oda_id' => $this->faker->randomDigitNotNull,
        'tipo_calificacion_id' => $this->faker->randomDigitNotNull,
        'porcentaje' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
