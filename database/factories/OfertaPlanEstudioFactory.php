<?php

namespace Database\Factories;

use App\Models\OfertaPlanEstudio;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaPlanEstudioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OfertaPlanEstudio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'academic_program_id' => $this->faker->word,
        'program_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
