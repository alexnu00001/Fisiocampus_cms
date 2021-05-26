<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OfertaTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        //
        DB::table('tipos_oferta')->insert(
          [
            [
              'nombre' => 'Maestría',
              'descripcion' => 'Tipo de oferta de Master, A nivel nacional es reconocido ante las secretarías de educación'
            ],
            [
              'nombre' => 'Diplomado',
              'descripcion' => 'Tipo de oferta de diplomado, se requieren cumplir con "n" cursos para completar este grado'
            ],
            [
              'nombre' => 'MOOC',
              'descripcion' => 'Tipo de oferta de MOOC, Curso Masivo en linea abierto al público'
            ],
            [
              'nombre' => 'Aula Virtual',
              'descripcion' => 'Tipo de oferta de Aula Virtual, En el momento de migrar la plataforma,
            quien tiene una suscripción activa a las aulas, serán inscritos en automático a este tipo de oferta'
            ],
            [
              'nombre' => 'Cursos FPA',
              'descripcion' => 'Tipo de oferta de FPA, Cursos de Fisioterapia Presencial Avanzados'
            ],
            [
              'nombre' => 'Aulas',
              'descripcion' => 'Aulas de fisiocampus'
            ],
            [
              'nombre' => 'Cursos',
              'descripcion' => 'Aulas de fisiocampus'
            ]
          ]
        );

    }
}
