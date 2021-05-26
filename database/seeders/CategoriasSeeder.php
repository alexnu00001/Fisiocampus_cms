<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categorias')->insert(['nombre'=>'Conocimientos básicos','tipo'=>'Conocimientos básicos','descripcion'=>'Categoria presentada como Conocimientos básicos','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Anatomía','tipo'=>'Anatomía','descripcion'=>'Categoria presentada como Anatomía','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisiología','tipo'=>'Fisiología','descripcion'=>'Categoria presentada como Fisiología','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Agentes físicos','tipo'=>'Agentes físicos','descripcion'=>'Categoria presentada como Agentes físicos','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Crioterapia','tipo'=>'Crioterapia','descripcion'=>'Categoria presentada como Crioterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Termoterapia','tipo'=>'Termoterapia','descripcion'=>'Categoria presentada como Termoterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Diatermia/Tecarterapia','tipo'=>'Diatermia/Tecarterapia','descripcion'=>'Categoria presentada como Diatermia/Tecarterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Láser','tipo'=>'Láser','descripcion'=>'Categoria presentada como Láser','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Electroterapia','tipo'=>'Electroterapia','descripcion'=>'Categoria presentada como Electroterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Ultrasonido y ondas de choque','tipo'=>'Ultrasonido y ondas de choque','descripcion'=>'Categoria presentada como Ultrasonido y ondas de choque','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Vendajes','tipo'=>'Vendajes','descripcion'=>'Categoria presentada como Vendajes','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Biomecánica','tipo'=>'Biomecánica','descripcion'=>'Categoria presentada como Biomecánica','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisiopatología','tipo'=>'Fisiopatología','descripcion'=>'Categoria presentada como Fisiopatología','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Exploración y diagnóstico','tipo'=>'Exploración y diagnóstico','descripcion'=>'Categoria presentada como Exploración y diagnóstico','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Razonamiento y casos clínicos','tipo'=>'Razonamiento y casos clínicos','descripcion'=>'Categoria presentada como Razonamiento y casos clínicos','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Metodología de la investigación en fisioterapia','tipo'=>'Metodología de la investigación en fisioterapia','descripcion'=>'Categoria presentada como Metodología de la investigación en fisioterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Terapia Manual','tipo'=>'Terapia Manual','descripcion'=>'Categoria presentada como Terapia Manual','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Masoterapia','tipo'=>'Masoterapia','descripcion'=>'Categoria presentada como Masoterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Cyriax – Masaje Transverso Profundo','tipo'=>'Cyriax – Masaje Transverso Profundo','descripcion'=>'Categoria presentada como Cyriax – Masaje Transverso Profundo','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Masoterapia general','tipo'=>'Masoterapia general','descripcion'=>'Categoria presentada como Masoterapia general','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Masoterapia deportiva','tipo'=>'Masoterapia deportiva','descripcion'=>'Categoria presentada como Masoterapia deportiva','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Terapia Manual Ortopédica','tipo'=>'Terapia Manual Ortopédica','descripcion'=>'Categoria presentada como Terapia Manual Ortopédica','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Técnicas de movilización con movimiento','tipo'=>'Técnicas de movilización con movimiento','descripcion'=>'Categoria presentada como Técnicas de movilización con movimiento','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Terapia manual instrumental','tipo'=>'Terapia manual instrumental','descripcion'=>'Categoria presentada como Terapia manual instrumental','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Cool Roller','tipo'=>'Cool Roller','descripcion'=>'Categoria presentada como Cool Roller','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'3Tool','tipo'=>'3Tool','descripcion'=>'Categoria presentada como 3Tool','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Terapia manual instrumental by Richelli’s','tipo'=>'Terapia manual instrumental by Richelli’s','descripcion'=>'Categoria presentada como Terapia manual instrumental by Richelli’s','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fibrólisis diacutánea','tipo'=>'Fibrólisis diacutánea','descripcion'=>'Categoria presentada como Fibrólisis diacutánea','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Técnicas Osteopáticas','tipo'=>'Técnicas Osteopáticas','descripcion'=>'Categoria presentada como Técnicas Osteopáticas','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Craneal','tipo'=>'Craneal','descripcion'=>'Categoria presentada como Craneal','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Visceral','tipo'=>'Visceral','descripcion'=>'Categoria presentada como Visceral','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Estructural','tipo'=>'Estructural','descripcion'=>'Categoria presentada como Estructural','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Drenaje linfático','tipo'=>'Drenaje linfático','descripcion'=>'Categoria presentada como Drenaje linfático','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Stretching Miofascial','tipo'=>'Stretching Miofascial','descripcion'=>'Categoria presentada como Stretching Miofascial','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Estiramientos','tipo'=>'Estiramientos','descripcion'=>'Categoria presentada como Estiramientos','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Facilitación Neuromuscular Propioceptiva','tipo'=>'Facilitación Neuromuscular Propioceptiva','descripcion'=>'Categoria presentada como Facilitación Neuromuscular Propioceptiva','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Reeducación Postural','tipo'=>'Reeducación Postural','descripcion'=>'Categoria presentada como Reeducación Postural','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Musculoenergía','tipo'=>'Musculoenergía','descripcion'=>'Categoria presentada como Musculoenergía','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Inducción miofascial','tipo'=>'Inducción miofascial','descripcion'=>'Categoria presentada como Inducción miofascial','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Movilización Neurodinámica','tipo'=>'Movilización Neurodinámica','descripcion'=>'Categoria presentada como Movilización Neurodinámica','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Ejercicio Terapéutico','tipo'=>'Ejercicio Terapéutico','descripcion'=>'Categoria presentada como Ejercicio Terapéutico','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Resistencia/Capacidad cardiopulmonar','tipo'=>'Resistencia/Capacidad cardiopulmonar','descripcion'=>'Categoria presentada como Resistencia/Capacidad cardiopulmonar','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Activación/Desempeño muscular','tipo'=>'Activación/Desempeño muscular','descripcion'=>'Categoria presentada como Activación/Desempeño muscular','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Control Motor/Estabilidad','tipo'=>'Control Motor/Estabilidad','descripcion'=>'Categoria presentada como Control Motor/Estabilidad','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Equilibrio/Coordinación','tipo'=>'Equilibrio/Coordinación','descripcion'=>'Categoria presentada como Equilibrio/Coordinación','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Escuela/Ejercicios de espalda','tipo'=>'Escuela/Ejercicios de espalda','descripcion'=>'Categoria presentada como Escuela/Ejercicios de espalda','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Método Pilates','tipo'=>'Método Pilates','descripcion'=>'Categoria presentada como Método Pilates','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Método Pilates clásico (en suelo)','tipo'=>'Método Pilates clásico (en suelo)','descripcion'=>'Categoria presentada como Método Pilates clásico (en suelo)','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Método Pilates en el embarazo y el postparto','tipo'=>'Método Pilates en el embarazo y el postparto','descripcion'=>'Categoria presentada como Método Pilates en el embarazo y el postparto','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Método Pilates con implementos y máquinas','tipo'=>'Método Pilates con implementos y máquinas','descripcion'=>'Categoria presentada como Método Pilates con implementos y máquinas','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Movimiento Óptimo','tipo'=>'Movimiento Óptimo','descripcion'=>'Categoria presentada como Movimiento Óptimo','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Gimnasia Abdominal Hipopresiva**','tipo'=>'Gimnasia Abdominal Hipopresiva**','descripcion'=>'Categoria presentada como Gimnasia Abdominal Hipopresiva**','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Movement Therapy','tipo'=>'Movement Therapy','descripcion'=>'Categoria presentada como Movement Therapy','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Entrenamiento propioceptivo','tipo'=>'Entrenamiento propioceptivo','descripcion'=>'Categoria presentada como Entrenamiento propioceptivo','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Kinetic Control','tipo'=>'Kinetic Control','descripcion'=>'Categoria presentada como Kinetic Control','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'K-Stretch','tipo'=>'K-Stretch','descripcion'=>'Categoria presentada como K-Stretch','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Especialidades de la fisioterapia','tipo'=>'Especialidades de la fisioterapia','descripcion'=>'Categoria presentada como Especialidades de la fisioterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia en traumatología y ortopedia','tipo'=>'Fisioterapia en traumatología y ortopedia','descripcion'=>'Categoria presentada como Fisioterapia en traumatología y ortopedia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Articulación Temporomandibular (ATM)','tipo'=>'Articulación Temporomandibular (ATM)','descripcion'=>'Categoria presentada como Articulación Temporomandibular (ATM)','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia deportiva','tipo'=>'Fisioterapia deportiva','descripcion'=>'Categoria presentada como Fisioterapia deportiva','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Readaptación y ejercicio terapéutico','tipo'=>'Readaptación y ejercicio terapéutico','descripcion'=>'Categoria presentada como Readaptación y ejercicio terapéutico','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Terapia manual en el atleta','tipo'=>'Terapia manual en el atleta','descripcion'=>'Categoria presentada como Terapia manual en el atleta','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia en pediatría','tipo'=>'Fisioterapia en pediatría','descripcion'=>'Categoria presentada como Fisioterapia en pediatría','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia obstétrica-uroginecológica','tipo'=>'Fisioterapia obstétrica-uroginecológica','descripcion'=>'Categoria presentada como Fisioterapia obstétrica-uroginecológica','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia invasiva','tipo'=>'Fisioterapia invasiva','descripcion'=>'Categoria presentada como Fisioterapia invasiva','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Ecografía neuromusculoesquelética','tipo'=>'Ecografía neuromusculoesquelética','descripcion'=>'Categoria presentada como Ecografía neuromusculoesquelética','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Electrólisis','tipo'=>'Electrólisis','descripcion'=>'Categoria presentada como Electrólisis','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Neuromodulación','tipo'=>'Neuromodulación','descripcion'=>'Categoria presentada como Neuromodulación','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Punción seca y punción seca ecoguiada','tipo'=>'Punción seca y punción seca ecoguiada','descripcion'=>'Categoria presentada como Punción seca y punción seca ecoguiada','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia vestibular','tipo'=>'Fisioterapia vestibular','descripcion'=>'Categoria presentada como Fisioterapia vestibular','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia en neurología','tipo'=>'Fisioterapia en neurología','descripcion'=>'Categoria presentada como Fisioterapia en neurología','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia estética/tegumentaria','tipo'=>'Fisioterapia estética/tegumentaria','descripcion'=>'Categoria presentada como Fisioterapia estética/tegumentaria','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Fisioterapia acuática','tipo'=>'Fisioterapia acuática','descripcion'=>'Categoria presentada como Fisioterapia acuática','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Técnicas complementarias','tipo'=>'Técnicas complementarias','descripcion'=>'Categoria presentada como Técnicas complementarias','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Coaching en fisioterapia','tipo'=>'Coaching en fisioterapia','descripcion'=>'Categoria presentada como Coaching en fisioterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Nutrición y fisioterapia','tipo'=>'Nutrición y fisioterapia','descripcion'=>'Categoria presentada como Nutrición y fisioterapia','rel_id'=>0]);
      DB::table('categorias')->insert(['nombre'=>'Psiconeuroinmunología (PNI)','tipo'=>'Psiconeuroinmunología (PNI)','descripcion'=>'Categoria presentada como Psiconeuroinmunología (PNI)','rel_id'=>0]);
    }
}
