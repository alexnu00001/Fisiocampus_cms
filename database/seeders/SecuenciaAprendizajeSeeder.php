<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SecuenciaAprendizajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('secuencias_aprendizaje')->insert(
        [
          [
            'nombre' => 'Introducción',
            'titulo' => 'Introducción al curso',
            'is_seriado' => false,
            'orden' => 1,
            'curso_id' => 1
          ],
          [
            'nombre' => 'Introducción a la ATM',
            'titulo' => 'Introducción a lo que es la ATM',
            'is_seriado' => true,
            'orden' => 2,
            'curso_id' => 1
          ],
          [
            'nombre' => 'Musculatura',
            'titulo' => 'Musculaturas',
            'is_seriado' => true,
            'orden' => 3,
            'curso_id' => 1
          ],
          [
            'nombre' => 'Información',
            'titulo' => 'Información del Curso',
            'orden' => 1,
            'is_seriado' => false,
            'curso_id' => 2
          ]
        ]
      );
    }
}
