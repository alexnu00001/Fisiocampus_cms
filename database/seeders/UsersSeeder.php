<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1=>Profesor, 2=>Integrador, 3=>Alumnos
        /*
         * Los roles son administrados por Spatie
         */

        DB::table('users')->insert([
            'name' => 'Mariana Antonio Sol',
            'email' => 'estudiante@correo.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'Mario Daniel Sandoval',
            'email' => 'integrador@correo.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'José Sánchez Morales',
            'email' => 'profesor@correo.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@fisiocampus.com',
          'password' => bcrypt('W2br3dg2')
        ]);

        DB::table('users')->insert([
          'name' => 'Raz Lupercio',
          'email' => 'raz@lupercio.mx',
          'password' => bcrypt('changemelater')
        ]);
    }
}
