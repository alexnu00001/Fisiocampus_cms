<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('modalidades')->insert(
          [
            [
              'nombre' => 'Default',
              'descripcion' => 'Modalidad Default.'
            ],
            [
              'nombre' => 'Sabatino',
              'descripcion' => 'Modalidad Sabatina.'
            ]
          ]
        );
    }
}
