<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PersonaSeeder extends Seeder
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


      DB::table('personas')->insert([
        'user_id' => 1,
        'dni_id' => $faker->dni,
        'nombre' => 'Mariana',
        'apellido' => 'Antonio Sol',
        'email' => 'profesor@correo.com'
      ]);

      DB::table('personas')->insert([
        'user_id' => 2,
        'dni_id' => $faker->dni,
        'nombre' => 'Mario',
        'apellido' => 'Daniel Sandoval',
        'email' => 'integrador@correo.com'
      ]);


      DB::table('personas')->insert([
          'user_id' => 3,
          'dni_id' => $faker->dni,
          'nombre' => 'José',
          'apellido' => 'Sánchez Morales',
          'email' => 'estudiante@correo.com'
      ]);

        DB::table('personas')->insert([
            'user_id' => 4,
            'dni_id' => $faker->dni,
            'nombre' => 'Joaquín',
            'apellido' => 'Carmona',
            'email' => 'joaquin@gmail.com'
        ]);

        DB::table('personas')->insert([
            'user_id' => 5,
            'dni_id' => $faker->dni,
            'nombre' => 'Raz',
            'apellido' => 'Lupercio',
            'email' => 'raz@lupercio'
        ]);
    }
}
