<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oferta;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table('ofertas')->insert([
          [
            'nombre' => 'AULA DE ABORDAJE DE LA ATM',
            'descripcion' => 'La columna cervical superior y la articulación temporomandibular están íntimamente relacionadas, esta especialidad de la fisioterapia acomete su abordaje',
            'moneda_id' => 1,
            'pais_id' => 1,
            'oferta_tipo_id' => 4,
            'costo' => 99,
            'is_compra_individual' => true
          ],
          [
            'nombre' => 'FISIOTERAPIA VISCERAL',
            'descripcion' => 'Ayuda a los desequilibrios funcionales y estructurales musculoesqueléticas, vasculares, nerviosas, urogenitales, respiratorias, digestivas y linfáticas',
            'moneda_id' => 1,
            'pais_id' => 1,
            'oferta_tipo_id' => 5,
            'costo' => 250,
            'is_compra_individual' => false
          ]
        ]);

      \DB::table('estatuses')->insert([
        'documento'=> 'Tipo Inscripcion',
        'nombre' => 'Activo',
        'descripcion' => 'Tipo de Suscrpcion Activa',
        'estatus_id' => '101'
      ]);



      \DB::table('inscripcion_tipos')->insert([
        'nombre'=> 'Anual',
        'descripcion' => 'Suscripcion Anual de fisiocampus',
        'estatus_id' => '1'
      ]);

      \DB::table('inscripcion_tipos')->insert([
        'nombre'=> 'Anual Plus',
        'descripcion' => 'Suscripcion Anual Plus de fisiocampus',
        'estatus_id' => '1'
      ]);
    }
}
