<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OdaSecuenciaAprendizajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('oda_secuencia_aprendizaje')->insert(
        [
          [
            'oda_id' => 1,
            'secuencia_aprendizaje_id' => 1
          ],
          [
            'oda_id' => 2,
            'secuencia_aprendizaje_id' => 2
          ],
          [
            'oda_id' => 3,
            'secuencia_aprendizaje_id' => 2
          ],
          [
            'oda_id' => 4,
            'secuencia_aprendizaje_id' => 2
          ],
          [
            'oda_id' => 5,
            'secuencia_aprendizaje_id' => 2
          ],
          [
            'oda_id' => 6,
            'secuencia_aprendizaje_id' => 2
          ],
          [
            'oda_id' => 7,
            'secuencia_aprendizaje_id' => 3
          ],
          [
            'oda_id' => 8,
            'secuencia_aprendizaje_id' => 3
          ],
          [
            'oda_id' => 9,
            'secuencia_aprendizaje_id' => 4
          ]
        ]
      );
    }
}
