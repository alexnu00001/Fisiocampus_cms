<?php

namespace Database\Factories;

use App\Models\person;
use Illuminate\Database\Eloquent\Factories\Factory;

class personFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'estado_civil' => $this->faker->word,
        'telefono' => $this->faker->word,
        'movil' => $this->faker->word,
        'email' => $this->faker->word,
        'sexo' => $this->faker->word,
        'fecha_nacimiento' => $this->faker->word,
        'nacionalidad' => $this->faker->word,
        'preparacion_academica' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
