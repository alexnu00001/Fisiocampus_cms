<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CursoPlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('curso_plan_estudio')->insert(
        [
          [
            'curso_id' => 1,
            'plan_estudio_id' => 1
          ],
          [
            'curso_id' => 2,
            'plan_estudio_id' => 2
          ]
        ]
      );
    }
}
