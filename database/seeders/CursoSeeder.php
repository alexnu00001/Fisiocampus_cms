<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('cursos')->insert(
          [
            [
              'titulo' => 'Abordaje de la ATM',
              'descripcion' => 'Curso único de la ATM',
              'orden' =>1,
              'modalidad_id' => 1

            ],
            [
              'titulo' => 'Fisioterapia Visceral',
              'descripcion' => 'Curso único de Fisioterapia Visceral',
              'orden' =>1,
              'modalidad_id' => 1
            ]
          ]
        );

    }
}
