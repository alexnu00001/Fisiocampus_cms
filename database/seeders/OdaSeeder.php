<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OdaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      \DB::table('tipos_odas')->insert(
        [
          [
            'nombre' => 'Video',
            'descripcion' => 'Este tipo de video estará visible para los usuarios que tengan acceso al contenido'
          ],
          [
            'nombre' => 'Archivo PDF',
            'descripcion' => 'Este tipo de archivo se mostrará sobre la plataforma y podrá ser descargado por el usuario'
          ],
          [
            'nombre' => 'Lectura',
            'descripcion' => 'Este tipo de contenido será leído sobre la plataforma'
          ],
          
          [
            'nombre' => 'Archivo de Lectura',
            'descripcion' => 'Este tipo de contenido será leído sobre la plataforma'
          ],
          [
            'nombre' => 'Video Youtube',
            'descripcion' => 'Este tipo de video estará visible para los usuarios que tengan acceso al contenido'
          ],
          [
            'nombre' => 'Documento',
            'descripcion' => 'Este tipo de archivo se mostrará sobre la plataforma y podrá ser descargado por el usuario'
          ],
        ]
      );


      \DB::table('oda')->insert(
        [
          [
            'nombre' => 'Introducción a la ATM',
            'descripcion' => 'En este vídeo Tomás Bonino te va a explicar un poco la introducción al curso y sobre todo al campo de la ATM o articulación temporomandibular, todas las relaciones biomecánicas que tiene y todo lo que se sabe a nivel científico de la articulación y su relación con lo que lo rodea (y más allá).',
            'archivo' => '',
            'tipo_id' => 1,
            'orden' => 1
          ],
          [
            'nombre' => 'Ligamentos y sinoviales de la ATM',
            'descripcion' => 'En este vídeo te vamos a explicar la anatomía de los ligamentos y las sinoviales de la articulación temporomandibular (ATM). Esta información es importante porque te vamos a orientar en sus posibles patologías más adelante y es necesario tener en cuenta esta información para ello.',
            'archivo' => '',
            'tipo_id' => 1,            
            'orden' => 1
          ],
          [
            'nombre' => 'Paciente tipo de la ATM',
            'descripcion' => 'En el siguiente vídeo te explicaremos el “paciente tipo” que llega a nuestra consulta con patología de la articulación temporomandibular.',
            'archivo' => '',
            'tipo_id' => 1,
            'orden' => 2
          ],
          [
            'nombre' => 'Anatomía articular de la ATM',
            'descripcion' => 'En este vídeo te vamos a hablar de la anatomía articular de la articulación temporomandibular. Esta es una anatomía no muy complicada, pero muy desconocida (es una cosa bastante nueva para todos porque durante la carrera no nos suelen afianzar el tema de la articulación temporomandibular).',
            'archivo' => '',
            'tipo_id' => 1,
            'orden' => 3
          ],
          [
            'nombre' => 'Objetivos terapéuticos de la ATM',
            'descripcion' => 'En este vídeo te vamos a explicar un poco los objetivos que se plantean o se intentan alcanzar en una terapia de alguna patología de (o relacionada con) la articulación temporomandibular. En otras palabras vamos a hablar sobre los objetivos terapéuticos de la ATM.',
            'archivo' => '',
            'tipo_id' => 1,            
            'orden' => 4
          ],
          [
            'nombre' => 'Ruidos articulares de la ATM',
            'descripcion' => 'Te vamos a contar en este vídeo los ruidos articulares de la articulación temporomandibular, para que sepas identificar lo que escuchamos y qué puede ser (atención, no vamos a dar con el diagnóstico a través de los ruidos articulares, pero sí te va a orientar a la hora de realizar un diagnóstico).',
            'archivo' => '',
            'tipo_id' => 1,
            'orden' => 5
          ],
          [
            'nombre' => 'Musculatura supramandibular',
            'descripcion' => 'Vamos a ver en este vídeo la musculatura supramandibular, es decir, toda la musculatura que tiene que ver con la articulación temporomandibular que se encuentra de la mandíbula para arriba.',
            'archivo' => '',
            'tipo_id' => 1,
            'orden' => 2
          ],
          [
            'nombre' => 'Musculatura infrahioideos',
            'descripcion' => 'En este vídeo vamos a hablar sobre una musculatura muy relacionada con la articulación temporomandibular, en este caso la musculatura inframandibular (la musculatura que se encuentra por debajo de la quijada).',
            'archivo' => '',
            'tipo_id' => 1, 
            'orden' => 5
          ],
          [
            'nombre' => 'FISIOTERAPIA VISCERAL',
            'descripcion' => 'Partiendo de la observación de que las vísceras intraabdominales se mueven naturalmente, se argumenta que esta movilidad podría verse alterada de la misma manera que la movilidad articular puede ser alterada. Desde un punto de vista fisiopatológico, se afirma que estas alteraciones pueden desencadenar, aumentar o mantener las afecciones musculoesqueléticas (por ejemplo, la lumbalgia) o gastrointestinales (por ejemplo, los trastornos del intestino irritable, entre otros. En consecuencia, los osteópatas viscerales proponen que estas alteraciones de la movilidad pueden detectarse mediante palpación y tratarse mediante manipulación.

De manera que, la intención de este curso es demostrar que la osteopatía visceral ayuda a los desequilibrios funcionales y estructurales en todo el cuerpo, incluida la disfunción musculoesquelética, vascular, nerviosa, urogenital, respiratoria, digestiva y linfática. Además, se pretende que el participante evalúe y trate la dinámica del movimiento y la suspensión en relación con los órganos, membranas, fascia y ligamentos, puesto que la osteopatía visceral aumenta la comunicación propioceptiva dentro del cuerpo, revitalizando así a una persona y aliviando los síntomas de dolor, disfunción y mala postura.

Este curso tiene un enfoque integrador para la evaluación y el tratamiento de un paciente. Como se ha demostrado a lo largo de los años, el paciente requiere la evaluación de las relaciones estructurales entre las vísceras y sus uniones fasciales o ligamentosas al sistema musculoesquelético. Las tensiones en el tejido conectivo de las vísceras pueden ser el resultado de cicatrices quirúrgicas, adherencias, enfermedades, posturas o lesiones. Los patrones de tensión se forman a través de la red fascial en las profundidades del cuerpo, creando una cascada de efectos lejos de sus fuentes por los cuales el cuerpo tendrá que compensar. Esto crea puntos de tensión fijos y anormales por los que el cuerpo debe moverse, y esta irritación crónica da paso a problemas funcionales y estructurales.

En definitiva, en este curso aprenderás a  entender a tu paciente desde un punto más holístico y global, pudiendo relacionar un dolor estructural con una lesión visceral. De esta manera obtendrás más éxito a la hora del tratamiento y resolverás dolores y patologías que hasta ahora no habías logrado.',
            'archivo' => '',
            'tipo_id' => 1, 
            'orden' => 6
          ]
        ]

      );
    }
}
