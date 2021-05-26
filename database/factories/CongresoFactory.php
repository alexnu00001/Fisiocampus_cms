<?php

namespace Database\Factories;

use App\Models\Congreso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CongresoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Congreso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
        'subtitulo' => $this->faker->text,
        'logo' => $this->faker->word,
        'imagen_cabecera_fondo' => $this->faker->word,
        'categoria_congreso_id' => $this->faker->randomDigitNotNull,
        'video_streaming' => $this->faker->word,
        'descripcion_temario' => $this->faker->text,
        'programa' => $this->faker->word,
        'direccion_id' => $this->faker->randomDigitNotNull,
        'fecha_inicial' => $this->faker->date('Y-m-d H:i:s'),
        'fecha_final' => $this->faker->date('Y-m-d H:i:s'),
        'is_fecha_final' => $this->faker->word,
        'fecha_limite_inscripcion' => $this->faker->date('Y-m-d H:i:s'),
        'numero_plazas' => $this->faker->randomDigitNotNull,
        'duracion' => $this->faker->word,
        'tipo_congreso_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
