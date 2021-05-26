<?php

namespace Database\Factories;

use App\Models\SecuenciaAprendizaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecuenciaAprendizajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SecuenciaAprendizaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'titulo' => $this->faker->word,
        'is_seriado' => $this->faker->word,
        'curso_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
