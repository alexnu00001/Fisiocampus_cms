<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Escuela;
use App\Models\Estudiante;
use App\Models\Oda;
use App\Models\Oferta;
use App\Models\OfertaInscripcion;
use App\Models\Persona;
use App\Models\PlanEstudio;
use App\Models\Profesor;
use App\Models\SecuenciaAprendizaje;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Excel;
use Flash;

class SetupController extends Controller
{
    public function index(){
      return view('setup.index');
    }

    public function migracion_1(Request $request){
      $input = $request->all();
      $array = Excel::toArray([], $request->file('file'));
      $courses = array_shift($array);

      foreach ($courses as $key => $course){
        if($key == 0){
          continue;
        }
        $oferta = [
          'nombre' => $course[1],
          'descripcion' => $course[7] != null ? $course[7] : '_',
          'costo' => $course[15] != null ? floatval($course[7]) : '0',
          'pais_id' => 1,
          'moneda_id' => 1,
          'oferta_tipo_id' => 1,
          'is_activo' => 1,
          'is_public' => 1,
          "alt_banner" => '',
          "title_banner" => '',
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
        ];
        $ofertaObj = Oferta::create($oferta);
        $planEstudios = [
          'nombre' => $course[1],
          'descripcion' => $course[7] != null ? substr($course[7],0,121)  : '_',
          'grado_id' => 1,
          'orden' => 1
        ];
        $planObj = PlanEstudio::create($planEstudios);
        $curso = [
          'titulo' => $course[1],
          'descripcion' => $course[7] != null ? $course[7] : '_',
          'numero_horas' => 1,
          'numero_creditos' => 1,
          'modalidad_id' => 1,
          'modelos_evaluacion' => '',
          'materiales_curso' => '',
          "alt_banner" => '',
          "title_banner" => '',
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
          "alt_icono" => '',
          "title_icono" => '',
          'orden' => 1
        ];
        $cursoObj = Curso::create($curso);
        $secuenciaDeAprendizaje = [
          'nombre' => $course[1],
          'titulo' => $course[1],
          'is_seriado' => 0,
          'curso_id' => 1,
          "alt_banner" => '',
          "title_banner" => '',
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
          "alt_icono" => '',
          "title_icono" => '',
          'orden' => 1
        ];
        $secuenciaObj = SecuenciaAprendizaje::create($secuenciaDeAprendizaje);
        $oda = [
          'nombre' =>  $course[1],
          'descripcion'=> $course[7] != null ? $course[7] : '_',
          'archivo'=> $course[27],
          'tipo_id'=> '5',
          'orden'=> '1'
        ];
        $odaObj = Oda::create($oda);
      }
          $input = array(
                'nid' => 'value',
                'title' => 'value',
                'field_profesor' => 'value',
                'uid_field_profesor' => 'value',
                'field_logo_course' => 'value',
                'field_curso_banner' => 'value',
                'field_curso_header_bg' => 'value',
                'field_subtitle_course' => 'value',
                'field_course_cat' => 'value',
                'field_course_sello_ref' => 'value',
                'field_course_certificado' => 'value',
                'field_video' => 'value',
                'field_faqs_json' => 'value',
                'field_sello_de_la_acreditaci_n' => 'value',
                'field_credits_number' => 'value',
                'field_course_price' => 'value',
                'field_discount' => 'value',
                'field_course_duration' => 'value',
                'field_aula_cat' => 'value',
                'field_course_online_access' => 'value',
                'field_sponsors' => 'value',
                'field_files' => 'value',
                'field_fpa_extends' => 'value',
                'field_fpa_asociado' => 'value',
                'field_video_campus_cat' => 'value',
                'field_course_status_message' => 'value',
                'field_course_status_color' => 'value',
                'url' => 'value'
          );
      return redirect()->route('migracion');
      return view('setup.index');
    }

    public function migracionProfesores(Request $request){
      $input = $request->all();
      $array = Excel::toArray([], $request->file('file'));
      $profesores = array_shift($array);
      $now = Carbon::now();
      set_time_limit(10800);

      foreach ($profesores as $key => $profesor){
        if($key == 0){
          continue;
        }

        $escuela = Escuela::where('nombre',$profesor[15])->first();
        $studyAcademy = Escuela::where('nombre',$profesor[17])->first();

        if(!$escuela){
          if($profesor[15] != '' && $profesor[15] != null){
            $escuela = Escuela::create([
              'nombre' => $profesor[15],
              'descripcion' => $profesor[15],
              'siglas' => '',
              'link' => $profesor[16]
            ]);
          }
        }
        if(!$studyAcademy){
          if($profesor[17] != '' && $profesor[17] != null){
            $studyAcademy = Escuela::create([
              'nombre' => $profesor[17],
              'descripcion' => $profesor[17],
              'siglas' => '',
              'link' => $profesor[18]
            ]);
          }
        }

        $user = User::where('email',$profesor[3])->first();
        if(!$user){

          $user = User::create([
            'name' => $profesor[1],
            'email' => $profesor[3],
            'email_verified_at' => $now,
            'password' => bcrypt($profesor[3])
          ]);

          $user->assignRole('Profesor');

          $persona = [
            'user_id' => $user->id,
            'nombre' => $profesor[1],
            'estado_civil' => '',
            'telefono' => $profesor[10],
            'movil' => $profesor[10],
            'email' => $profesor[3],
            'preparacion_academica' => $profesor[13]
          ];

          $persona = Persona::create($persona);


          /*
           * Modelo Profesor
           */

          $profesor = [
            'persona_id' => $persona->id,
            'escuela_id' => isset($escuela->id) ? $escuela->id : null,
            'estudio_academico_id' => isset($studyAcademy->id) ? $studyAcademy->id : null,
            'resumen' => '_',
            'sobre_mi' => '_',
            'redes' => '',
            'ubicacion' =>  $profesor[19],
            'avatar' => $profesor[20],
            'uid_interno' => $profesor[0],
            'job' => $profesor[12],
            'especialidad' => $profesor[13]
          ];
          $profesor = Profesor::create($profesor);
        }

      }
      Flash::success('Migracion de Profesores Exitosa.');
      return redirect()->route('migracion');
    }


  public function migracionAulas(Request $request){
    $input = $request->all();
    $array = Excel::toArray([], $request->file('fileAulas'));
    $aulas = array_shift($array);
    //dd($aulas);
    $now = Carbon::now();

    set_time_limit(10800);
    foreach ($aulas as $key => $aulaReg){
      if($key == 0){
        continue;
      }

      if($aulaReg[6] == null){
        $aulaReg[6] = 'Sin aula Asignada';
      }
      $aula = Oferta::where('nombre',$aulaReg[6])->first();
      if(!$aula){
        $aula = Oferta::create([
          'nombre' => $aulaReg[6],
          'descripcion' => $aulaReg[25] != 0 ? $aulaReg[25] : '_',
          'costo' =>  '0',
          'pais_id' => 1,
          'moneda_id' => 1,
          'oferta_tipo_id' => $aulaReg[26],
          'is_activo' => 1,
          'is_public' => 0,
          "alt_banner" => '',
          "title_banner" => '',
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
          "is_compra_individual" => false
        ]);
      }

      $this->assignCategory($aula,$aulaReg);

      try{
        $this->attachMedia($aula,$aulaReg,'aulas');
      }catch(\Exception $e){
        \Log::error('Error dando de alta la media :',['e'=>$e]);

      }

      /*
       * Inscribir aula en oferta anual
       */

      $relacionSuscripcion = OfertaInscripcion::where('oferta_id',$aula->id)
        ->where('inscripcion_tipo_id',1)
        ->first(); // Suscripcion Anual

      if(!$relacionSuscripcion){
        $relacionSuscripcion = OfertaInscripcion::create([
          'oferta_id' => $aula->id,
          'inscripcion_tipo_id' => 1
        ]);
      }

      /*
       * =============================
       */

      /*
       * Inscribir aula en oferta anual plus
       */

      $relacionSuscripcion = OfertaInscripcion::where('oferta_id',$aula->id)
        ->where('inscripcion_tipo_id',2)
        ->first(); // Suscripcion Anual

      if(!$relacionSuscripcion){
        $relacionSuscripcion = OfertaInscripcion::create([
          'oferta_id' => $aula->id,
          'inscripcion_tipo_id' => 2
        ]);
      }

      /*
       * =============================
       */


      /*
       * Genera el plan de estudios para el aula
       */


      $planEstudios = PlanEstudio::where('nombre',$aulaReg[6])->first();
      if(!$planEstudios){
        $planEstudios = PlanEstudio::create([
          'nombre' => $aulaReg[6],
          'descripcion' =>  '_',
          'orden' => 1
        ]);
      }

      $aula->ofertaPlanEstudios()->sync([$planEstudios->id]);



      $curso = Curso::where('titulo',$aulaReg[1])->first();
      if(!$curso){
        $curso = Curso::create([
          'titulo' => $aulaReg[1],
          'descripcion' => $aulaReg[20] != null ? $aulaReg[20] : '_',
          'numero_horas' => 0,
          'numero_creditos' => 1,
          'modalidad_id' => 1,
          'modelos_evaluacion' => '',
          'materiales_curso' => '',
          "alt_banner" => $aulaReg[1],
          "title_banner" => $aulaReg[1],
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
          "alt_icono" => '',
          "title_icono" => '',
          'orden' => 1
        ]);
      }

      $profesores = explode(',',$aulaReg[8]);

      foreach($profesores as $profesor){
        $profesor = trim($profesor);
        $persona = Persona::where('nombre',$profesor)->first();
        if($persona){
          $profe = Profesor::where('persona_id',$persona->id)->first();
          if($profe){
            $curso->Profesores()->sync([$profe->id]);
          }
        }
      }



      /*
       * Relaciona el plan de estudios con el curso recientemente creado
       */
      $planEstudios->cursoPlanEstudios()->sync([$curso->id]);


      /*
       * Creamos la secuencia de aprendizaje
       */

      $secuenciaDeAprendizaje = SecuenciaAprendizaje::where('nombre',$aulaReg[1])->first();
      if(!$secuenciaDeAprendizaje){
        $secuenciaDeAprendizaje = SecuenciaAprendizaje::create([
          'nombre' => $aulaReg[1],
          'titulo' => $aulaReg[1],
          'is_seriado' => 0,
          'curso_id' => 1,
          "alt_banner" => '',
          "title_banner" => '',
          "alt_img_princ" => '',
          "title_img_princ" => '',
          "alt_img_sec" => '',
          "title_img_sec" => '',
          "alt_icono" => '',
          "title_icono" => '',
          'orden' => 1
        ]);
      }

      $secuenciaDeAprendizaje->update([
        'curso_id' => $curso->id
      ]);


      /*
       * Creamos las odas, cada registro de la tabla que estamos subiendo debe de ser una oda diferente
       *
       */


      $oda = [
        'nombre' =>  $aulaReg[1],
        'descripcion'=> $aulaReg[25] != null ? $aulaReg[25] : '_',
        'archivo'=> $aulaReg[3] != null ? $aulaReg[3] : $aulaReg[5],
        'tipo_id'=> '5',
        'orden'=> '1'
      ];

      $odaObj = Oda::create($oda);
      $odaObj->odaSecuenciaAprendizajes()->sync([$secuenciaDeAprendizaje->id]);
    }

    Flash::success('Migracion de Aulas Exitosa.');
    return view('setup.index');


  }


  public function migracionUsuarios(Request $request){
    $array = Excel::toArray([], $request->file('fileUsuarios'));
    $usuarios = array_shift($array);
    $now = Carbon::now();
    //dd($usuarios);
    set_time_limit(10800);
    foreach ($usuarios as $key => $usuario){
      if($key == 0){
        continue;
      }

      $escuela = Escuela::where('nombre',$usuario[15])->first();
      $studyAcademy = Escuela::where('nombre',$usuario[17])->first();

      if(!$escuela){
        if($usuario[15] != '' && $usuario[15] != null){
          $escuela = Escuela::create([
            'nombre' => $usuario[15],
            'descripcion' => $usuario[15],
            'siglas' => '',
            'link' => $usuario[16]
          ]);
        }
      }
      if(!$studyAcademy){
        if($usuario[17] != '' && $usuario[17] != null){
          $studyAcademy = Escuela::create([
            'nombre' => $usuario[17],
            'descripcion' => $usuario[17],
            'siglas' => '',
            'link' => $usuario[18]
          ]);
        }
      }

      $user = User::where('email',$usuario[3])->first();
      if(!$user){

        $user = User::create([
          'name' => $usuario[1],
          'email' => $usuario[3],
          'email_verified_at' => $now,
          'password' => bcrypt($usuario[3]),
          'internal_uid' => $usuario[0]
        ]);

        $user->assignRole('Estudiante');

        $persona = [
          'user_id' => $user->id,
          'nombre' => $usuario[1],
          'estado_civil' => '',
          'telefono' => $usuario[10],
          'movil' => $usuario[10],
          'email' => $usuario[3],
          'preparacion_academica' => $usuario[13]
        ];

        $persona = Persona::create($persona);


        /*
         * Modelo Estudiante
         */

        $estudiante = Estudiante::create([
          'persona_id' => $persona->id,
          'escuela_id' => isset($escuela->id) ? $escuela->id : null,
          'estudio_academico_id' => isset($studyAcademy->id) ? $studyAcademy->id : null,
          'resumen' => '_',
          'sobre_mi' => '_',
          'redes' => '',
          'ubicacion' =>  $usuario[19],
          'avatar' => $usuario[9],
          'uid_interno' => $usuario[0],
          'job' => $usuario[12],
          'especialidad' => $usuario[13]
        ]);

      }

    }
    Flash::success('Migracion de usuarios Exitosa.');
    return redirect()->route('migracion');
  }

  public function migracionCategorias(Request $request){
    $input = $request->all();
    $array = Excel::toArray([], $request->file('fileCategorias'));
    $categorias = array_shift($array);
    $now = Carbon::now();
    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    \DB::table('categorias')->delete();
    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    //dd($categorias);
    set_time_limit(10800);
    foreach ($categorias as $key => $categoria){
      if($key == 0){
        continue;
      }
      $categoriasArray = explode(',',$categoria[3]);
      foreach($categoriasArray as $key => $categoriaArray){
        $categoriaObj = Categoria::where('nombre',$categoriaArray)->first();
        if($categoriaObj){
            if(sizeof($categoriaObj->getMedia('categoria_principal')) == 0){
              $categoriaObj->addMediaFromUrl($categoria[2])->toMediaCollection('categoria_principal');
              //dd($categoria);
            }
          if(sizeof($categoriaObj->getMedia('categoria_icono')) == 0){
            $categoriaObj->addMediaFromUrl($categoria[1])->toMediaCollection('categoria_icono');
          }

        }else{
          $categoriaObj = Categoria::create([
            'nombre' => $categoriaArray,
            'tipo' => 1,
            'descripcion' => '',
            'rel_id' => 0
          ]);
          $categoriaObj->addMediaFromUrl($categoria[2])->toMediaCollection('categoria_principal');
          $categoriaObj->addMediaFromUrl($categoria[1])->toMediaCollection('categoria_icono');
        }
      }

    }
    Flash::success('Migracion de Categorias Exitosa.');
    return redirect()->route('migracion');
  }


  private function attachMedia ($oferta,$data,$type = null){


      if($type === 'aulas'){
        $urlBanner = $data[22];
        $urlPrincipal = $data[2];
        $urlIcono = $data[21];
        if($urlBanner != null && $urlBanner != 'NULL' && $urlBanner != '#N/A'){
          $oferta->addMediaFromUrl( $urlBanner )->toMediaCollection('ofertas_banner');
        }
        if($urlPrincipal != null && $urlPrincipal != 'NULL' && $urlPrincipal != '#N/A'){
          $oferta->addMediaFromUrl( $urlPrincipal )->toMediaCollection('ofertas_principal');
        }
        if($urlIcono != null && $urlIcono != 'NULL' && $urlIcono != '#N/A'){
          $oferta->addMediaFromUrl( $urlIcono )->toMediaCollection('ofertas_icono');
        }
      }

  }

  private function assignCategory($oferta, $data,$type = null){


      $mapeoCategorias = [
          'Anatomía y Diagnóstico' => 'Conocimientos básicos',
          'Anatomía Palpatoria' => 'Conocimientos básicos, Anatomía',
          'Anatomía y Fisiología' => 'Conocimientos básicos, Fisiología',
          'Biomecánica' => 'Conocimientos básicos, Biomecánica',
          'Exploración y Diagnóstico' => 'Conocimientos básicos, Exploración y diagnóstico',
          'Fisiología' => 'Conocimientos básicos, Fisiología',
          'Patología Musculoesquelética' => 'Especialidades de la fisioterapia, Fisioterapia en traumatología y ortopedia',
          'Razonamiento y Casos Clínicos' => 'Conocimientos básicos, Razonamiento y casos clínicos',
          'Terapia Manual y Rehabilitación' => 'Terapia Manual, Terapia Manual Ortopédica',
          'Cadenas Musculares' => 'Conocimientos básicos',
          'Concepto Sohier' => 'Terapia Manual',
          'Ftp. Postural - Cadenas Musculares' => 'Terapia Manual',
          'Ftp. Traumatológica' => 'Especialidades de la fisioterapia, Fisioterapia en traumatología y ortopedia',
          'Integrative Manual Therapy' => 'Terapia Manual',
          'Masoterapia General' => 'Masoterapia, Masoterapia general',
          'Masoterapia en Silla' => 'Masoterapia',
          'Masoterapia Relajante' => 'Masoterapia',
          'Masoterapia y Terapia Manual' => 'Masoterapia, Terapia Manual',
          'Método Mézières' => 'Terapia Manual',
          'Método POLD' => 'Terapia Manual',
          'Posturología' => 'Terapia Manual',
          'Readaptación Neuromuscular BMTherapy' => 'Terapia Manual',
          'RPG' => 'Terapia Manual',
          'Técnicas Cyriax' => 'Masoterapia, Cyriax – Masaje Transverso Profundo',
          'Ejercicio Terapéutico' => 'Ejercicio Terapéutico',
          'Cinesiterapia' => 'Ejercicio Terapéutico, Conocimientos básicos, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Ejercicio Terapéutico Funcional' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Entrenamiento Propioceptivo' => 'Ejercicio Terapéutico, Entrenamiento propioceptivo, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Estiramientos' => 'Terapia Manual, Estiramientos',
          'Fitball' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Gimnasia Abdominal Hipopresiva' => 'Ejercicio Terapéutico, Gimnasia Abdominal Hipopresiva',
          'Kinetic Control' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Movement Therapy' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, Movement Therapy',
          'Movimiento Óptimo' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, Movimiento Óptimo',
          'Método K-Stretch Postural (KSP)' => 'Ejercicio Terapéutico, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, K-Stretch',
          'Método Pilates durante el Embarazo' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, Método Pilates en el embarazo y el postparto',
          'Método Pilates - Máquinas' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, Método Pilates, Método Pilates con implementos y máquinas',
          'Método Pilates - Suelo e Implementos' => 'Ejercicio Terapéutico, Resistencia/Capacidad cardiopulmonar, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación, Método Pilates, Método Pilates clásico (en suelo)',
          'Movilización Articular' => 'Terapia Manual, Conocimientos básicos',
          'Redcord' => 'Ejercicio Terapéutico, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Streching Global Activo' => 'Terapia Manual, Stretching Miofascial',
          'Theraband' => 'Ejercicio Terapéutico, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'TRX' => 'Ejercicio Terapéutico, Activación/Desempeño muscular, Control Motor/Estabilidad, Equilibrio/Coordinación',
          'Especialidades de Fisioterapia' => 'Especialidades de la fisioterapia',
          'Abordaje de la ATM' => 'Especialidades de la fisioterapia, Fisioterapia en traumatología y ortopedia',
          'Disfunción y Dolor Orofacial' => 'Especialidades de la fisioterapia, Fisioterapia en traumatología y ortopedia, Articulación Temporomandibular (ATM)',
          'Ftp. Cardiovascular' => 'Especialidades de la fisioterapia, Fisioterapia cardiorrespiratoria',
          'Ftp. Deportiva' => 'Especialidades de la fisioterapia, Fisioterapia deportiva',
          'Ftp. Dermatofuncional' => 'Especialidades de la fisioterapia, Fisioterapia estética/tegumentaria',
          'Ftp. Manipulativa Osteopática' => 'Terapia Manual, Técnicas Osteopáticas',
          'Ftp. Neurológica' => 'Especialidades de la fisioterapia, Fisioterapia en neurología',
          'Ftp. Obstétrica-Uroginecológica' => 'Especialidades de la fisioterapia, Fisioterapia obstétrica-uroginecológica',
          'Ftp. Pediátrica' => 'Especialidades de la fisioterapia, Fisioterapia en pediatría',
          'Ftp. Respiratoria' => 'Especialidades de la fisioterapia, Fisioterapia cardiorrespiratoria',
          'Ftp. Visceral y Visceroemocional' => 'Especialidades de la fisioterapia',
          'Fisioterapia Vestibular' => 'Especialidades de la fisioterapia, Fisioterapia vestibular',
          'Osteopatía Estructural' => 'Terapia Manual, Técnicas Osteopáticas, Visceral',
          'Técnicas de Energía Muscular' => 'Terapia Manual',
          'Técnicas Neurodinámicas' => 'Terapia Manual, Movilización Neurodinámica',
          'TGO' => 'Terapia Manual, Técnicas Osteopáticas',
          'Ftp. Instrumental y Electroterapia' => 'Conocimientos básicos, Agentes físicos, Diatermia/Tecarterapia, Láser, Electroterapia, Ultrasonido y ondas de choque, Terapia Manual, Terapia manual instrumental',
          'Ecografía en Fisioterapia' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Ecografía neuromusculoesquelética',
          'Electroestimulación' => 'Conocimientos básicos, Agentes físicos, Electroterapia',
          'Electroterapia' => 'Conocimientos básicos, Agentes físicos, Electroterapia',
          'EPI - Electrólisis Percutánea Intratisular' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Electrólisis',
          'Fibrólisis Diacutánea' => 'Terapia Manual, Terapia manual instrumental, Fibrólisis diacutánea',
          'Ftp. Instrumental' => 'Terapia Manual, Terapia manual instrumental',
          'Ftp. Invasiva' => 'Especialidades de la fisioterapia, Fisioterapia invasiva',
          'Masoterapia con Cool Roller' => 'Terapia Manual, Terapia manual instrumental, Cool Roller',
          'Método McConnell' => 'Terapia Manual',
          'Ondas de Choque' => 'Conocimientos básicos, Agentes físicos, ondas de choque',
          'Punción Seca' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Punción seca y punción seca ecoguiada',
          'Punción Seca Ecoguiada' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Punción seca y punción seca ecoguiada',
          'Radiología - Exploración por Imagen' => 'Conocimientos básicos, Exploración y diagnóstico',
          'Tecarterapia' => 'Conocimientos básicos, Agentes físicos, Diatermia/Tecarterapia',
          'Terapia Manual Instrumentalizada by Richelli s' => 'Terapia Manual, Terapia manual instrumental, Terapia manual instrumental by Richelli’s',
          'Terapia Miofascial con 3Tool' => 'Terapia Manual, Terapia manual instrumental, 3Tool',
          'Ultrasonidos' => 'Conocimientos básicos, Agentes físicos, Ultrasonido',
          'Vendajes' => 'Conocimientos básicos, Agentes físicos, Vendajes',
          'Vendaje Funcional' => 'Conocimientos básicos, Agentes físicos, Vendajes',
          'Vendaje Neuromuscular' => 'Conocimientos básicos, Agentes físicos, Vendajes',
          'Vendaje para Linfedemas' => 'Conocimientos básicos, Agentes físicos, Vendajes',
          'Técnicas Complementarias' => 'Técnicas complementarias',
          'Acupuntura' => 'Técnicas complementarias',
          'Coaching y Asesoramiento en Fisioterapia' => 'Técnicas complementarias, Coaching en fisioterapia',
          'Nutrición en Fisioterapia' => 'Técnicas complementarias, Nutrición y fisioterapia',
          'PNI - Psiconeuroinmunología' => 'Técnicas complementarias, Psiconeuroinmunología (PNI)',
          'Reflexología Podal' => 'Técnicas complementarias',
          'Terapia con Ventosas' => 'Técnicas complementarias'
      ];

      $tipo = $data[23];
      $categoriaReg = $data[24];

    if($tipo !== 0 && $tipo !== null){
      if (array_key_exists($tipo, $mapeoCategorias)) {
          $registro = $mapeoCategorias[$tipo];
          $registroArr = explode(',',$registro);
          foreach($registroArr as $reg){
            $categoria = Categoria::where('nombre',$reg)->first();
            if($categoria){
              $categoria->ofertas()->sync([$oferta->id]);
            }
          }
        }
      }

    if($categoriaReg !== 0 && $categoriaReg !== null){
      if (array_key_exists($categoriaReg, $mapeoCategorias)) {
        $registro = $mapeoCategorias[$categoriaReg];
        $registroArr = explode(',',$registro);
        foreach($registroArr as $reg){
          $categoriaObj = Categoria::where('nombre',$reg)->first();
          if($categoriaObj){
            $categoriaObj->ofertas()->sync([$oferta->id]);
          }
        }
      }
    }
  }


}
