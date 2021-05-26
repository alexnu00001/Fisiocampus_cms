<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1=>Profesor, 2=>Integrador, 3=>Alumnos

        DB::table('products')->insert([
            'name' => 'Plan Anual',
            'descripcion' => 'Plan Anual',
            'stripe_id' => 'Plan Anual',
            'currency' => 'EUR',
            'price' => 120
        ]);

        DB::table('products')->insert([
            'name' => 'Plan Anual Plus',
            'descripcion' => 'Plan Anual Plus',
            'stripe_id' => 'Plan Anual',
            'currency' => 'EUR',
            'price' => 180
        ]);
    }
}