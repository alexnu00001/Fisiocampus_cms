<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CursoProfesorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('curso_profesor')->insert([
        	'curso_id' => 1,
            'profesor_id' => 1
        	]);
        \DB::table('curso_profesor')->insert([
        	'curso_id' => 1,
            'profesor_id' => 2
        	]);
        \DB::table('curso_profesor')->insert([
        	'curso_id' => 2,
            'profesor_id' => 3
        	]);
    }
}
