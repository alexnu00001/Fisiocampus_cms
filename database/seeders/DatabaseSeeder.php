<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          UsersSeeder::class,
          PermissionsSeeder::class,
          GradoSeeder::class,
          CurrencyTableSeeder::class,
          CountriesTableSeeder::class,
          OfertaTypesSeeder::class,
          OfertaSeeder::class,

          PlanEstudioSeeder::class,
          OfertaPlanEstudioSeeder::class,

          ModalidadesSeeder::class,
          CursoSeeder::class,
          CursoPlanEstudioSeeder::class,


          SecuenciaAprendizajeSeeder::class,
          OdaSeeder::class,
          OdaSecuenciaAprendizajeSeeder::class,

          PersonaSeeder::class,
          ProfesorsSeeder::class,
          CursoProfesorsSeeder::class,
          CategoriasSeeder::class,


          UserPruebaSeeder::class,
          EstatusSeeder::class

        ]);

    }
}
