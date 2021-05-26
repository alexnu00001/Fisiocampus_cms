<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();


        \DB::table('plan_estudio')->insert(
          [
            [
              'nombre' => 'Plan de aula de abordaje de la atm',
              'descripcion' => 'Este plan de estudios es establecido por la dirección académica,
            la cual establece los nombre oficiales. ',
            'orden' =>1
            ],
            [
              'nombre' => 'Plan de FPA Fisioterapia visceral',
              'descripcion' => 'El hecho de tener planes de estudio de manera independiente, permite relacionarlos con diferentes ofertas y así reutilizar contenido. ',
              'orden' =>1
            ]
          ]
        );
    }
}
