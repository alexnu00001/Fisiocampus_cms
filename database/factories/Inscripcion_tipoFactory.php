<?php

namespace Database\Factories;

use App\Models\Inscripcion_tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Inscripcion_tipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inscripcion_tipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomDigitNotNull,
        'descripcion' => $this->faker->text,
        'estatus_id' => $this->faker->randomDigitNotNull,
        'observaciones' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
