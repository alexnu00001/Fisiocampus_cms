<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfertaPlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('oferta_plan_estudio')->insert(
        [
          [
            'oferta_id' => 1,
            'plan_estudio_id' => 1,
          ],
          [
            'oferta_id' => 2,
            'plan_estudio_id' => 2,
          ]
        ]
      );
    }
}
