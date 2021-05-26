<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserPruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('estudiantes')->insert([
            'persona_id' => '1',
        ]);

        DB::table('curso_estudiante')->insert([
            'curso_id' => '1',
            'estudiante_id' => '1',
        ]);

        DB::table('curso_estudiante')->insert([
            'curso_id' => '2',
            'estudiante_id' => '1',
        ]);
    }
}
