<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

        \DB::table('grados')->insert([
        	['nombre' => 'Licenciatura', 'descripcion' => $faker->sentence],
        	['nombre' => 'Maestría', 'descripcion' => $faker->sentence]
        ]);
    }
}
