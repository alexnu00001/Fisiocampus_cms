<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProfesorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create();
		$faker->addProvider(new \Faker\Provider\es_ES\Person($faker));

        DB::table('profesors')->insert([
            'persona_id' => 3,
            'resumen' => $faker->catchPhrase
        ]);

        DB::table('profesors')->insert([
            'persona_id' => 4,
            'resumen' => $faker->catchPhrase
        ]);

        DB::table('profesors')->insert([
            'persona_id' => 5,
            'resumen' => $faker->catchPhrase
        ]);
    }
}
