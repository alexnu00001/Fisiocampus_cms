<?php

namespace Database\Factories;

use App\Models\Estatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documento' => $this->faker->word,
        'nombre' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'estatus_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
