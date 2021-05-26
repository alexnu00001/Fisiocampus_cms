<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      \DB::table('estatuses')->insert([
        'documento'=> 'Tipo Inscripcion',
        'nombre' => 'Inactivo',
        'descripcion' => 'Tipo de Suscrpcion inactiva',
        'estatus_id' => '102'
      ]);

      \DB::table('estatuses')->insert([
        'documento'=> 'Estudiante Oferta',
        'nombre' => 'Abierto',
        'descripcion' => 'El usuario ha visualizado el detalle de la oferta',
        'estatus_id' => '201'
      ]);


      \DB::table('estatuses')->insert([
        'documento'=> 'Estudiante Oferta',
        'nombre' => 'Iniciado',
        'descripcion' => 'El usuario ha visualizado el contenido de la oferta',
        'estatus_id' => '202'
      ]);

      \DB::table('estatuses')->insert([
        'documento'=> 'Estudiante Oferta',
        'nombre' => 'En progreso',
        'descripcion' => 'El usuario ha pasado más de 2 minutos observando el contenido',
        'estatus_id' => '203'
      ]);

      \DB::table('estatuses')->insert([
        'documento'=> 'Estudiante Oferta',
        'nombre' => 'Finalizado',
        'descripcion' => 'El usuario ha terminado de ver el contenido',
        'estatus_id' => '204'
      ]);

      \DB::table('estatuses')->insert([
        'documento'=> 'Inscripcion',
        'nombre' => 'Activa',
        'descripcion' => 'La inscripcion del usuario se encuentra activa',
        'estatus_id' => '301'
      ]);
    }
}
