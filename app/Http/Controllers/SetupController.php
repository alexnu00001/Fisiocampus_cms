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
          'Anatom??a y Diagn??stico' => 'Conocimientos b??sicos',
          'Anatom??a Palpatoria' => 'Conocimientos b??sicos, Anatom??a',
          'Anatom??a y Fisiolog??a' => 'Conocimientos b??sicos, Fisiolog??a',
          'Biomec??nica' => 'Conocimientos b??sicos, Biomec??nica',
          'Exploraci??n y Diagn??stico' => 'Conocimientos b??sicos, Exploraci??n y diagn??stico',
          'Fisiolog??a' => 'Conocimientos b??sicos, Fisiolog??a',
          'Patolog??a Musculoesquel??tica' => 'Especialidades de la fisioterapia, Fisioterapia en traumatolog??a y ortopedia',
          'Razonamiento y Casos Cl??nicos' => 'Conocimientos b??sicos, Razonamiento y casos cl??nicos',
          'Terapia Manual y Rehabilitaci??n' => 'Terapia Manual, Terapia Manual Ortop??dica',
          'Cadenas Musculares' => 'Conocimientos b??sicos',
          'Concepto Sohier' => 'Terapia Manual',
          'Ftp. Postural - Cadenas Musculares' => 'Terapia Manual',
          'Ftp. Traumatol??gica' => 'Especialidades de la fisioterapia, Fisioterapia en traumatolog??a y ortopedia',
          'Integrative Manual Therapy' => 'Terapia Manual',
          'Masoterapia General' => 'Masoterapia, Masoterapia general',
          'Masoterapia en Silla' => 'Masoterapia',
          'Masoterapia Relajante' => 'Masoterapia',
          'Masoterapia y Terapia Manual' => 'Masoterapia, Terapia Manual',
          'M??todo M??zi??res' => 'Terapia Manual',
          'M??todo POLD' => 'Terapia Manual',
          'Posturolog??a' => 'Terapia Manual',
          'Readaptaci??n Neuromuscular BMTherapy' => 'Terapia Manual',
          'RPG' => 'Terapia Manual',
          'T??cnicas Cyriax' => 'Masoterapia, Cyriax ??? Masaje Transverso Profundo',
          'Ejercicio Terap??utico' => 'Ejercicio Terap??utico',
          'Cinesiterapia' => 'Ejercicio Terap??utico, Conocimientos b??sicos, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Ejercicio Terap??utico Funcional' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Entrenamiento Propioceptivo' => 'Ejercicio Terap??utico, Entrenamiento propioceptivo, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Estiramientos' => 'Terapia Manual, Estiramientos',
          'Fitball' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Gimnasia Abdominal Hipopresiva' => 'Ejercicio Terap??utico, Gimnasia Abdominal Hipopresiva',
          'Kinetic Control' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Movement Therapy' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, Movement Therapy',
          'Movimiento ??ptimo' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, Movimiento ??ptimo',
          'M??todo K-Stretch Postural (KSP)' => 'Ejercicio Terap??utico, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, K-Stretch',
          'M??todo Pilates durante el Embarazo' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, M??todo Pilates en el embarazo y el postparto',
          'M??todo Pilates - M??quinas' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, M??todo Pilates, M??todo Pilates con implementos y m??quinas',
          'M??todo Pilates - Suelo e Implementos' => 'Ejercicio Terap??utico, Resistencia/Capacidad cardiopulmonar, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n, M??todo Pilates, M??todo Pilates cl??sico (en suelo)',
          'Movilizaci??n Articular' => 'Terapia Manual, Conocimientos b??sicos',
          'Redcord' => 'Ejercicio Terap??utico, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Streching Global Activo' => 'Terapia Manual, Stretching Miofascial',
          'Theraband' => 'Ejercicio Terap??utico, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'TRX' => 'Ejercicio Terap??utico, Activaci??n/Desempe??o muscular, Control Motor/Estabilidad, Equilibrio/Coordinaci??n',
          'Especialidades de Fisioterapia' => 'Especialidades de la fisioterapia',
          'Abordaje de la ATM' => 'Especialidades de la fisioterapia, Fisioterapia en traumatolog??a y ortopedia',
          'Disfunci??n y Dolor Orofacial' => 'Especialidades de la fisioterapia, Fisioterapia en traumatolog??a y ortopedia, Articulaci??n Temporomandibular (ATM)',
          'Ftp. Cardiovascular' => 'Especialidades de la fisioterapia, Fisioterapia cardiorrespiratoria',
          'Ftp. Deportiva' => 'Especialidades de la fisioterapia, Fisioterapia deportiva',
          'Ftp. Dermatofuncional' => 'Especialidades de la fisioterapia, Fisioterapia est??tica/tegumentaria',
          'Ftp. Manipulativa Osteop??tica' => 'Terapia Manual, T??cnicas Osteop??ticas',
          'Ftp. Neurol??gica' => 'Especialidades de la fisioterapia, Fisioterapia en neurolog??a',
          'Ftp. Obst??trica-Uroginecol??gica' => 'Especialidades de la fisioterapia, Fisioterapia obst??trica-uroginecol??gica',
          'Ftp. Pedi??trica' => 'Especialidades de la fisioterapia, Fisioterapia en pediatr??a',
          'Ftp. Respiratoria' => 'Especialidades de la fisioterapia, Fisioterapia cardiorrespiratoria',
          'Ftp. Visceral y Visceroemocional' => 'Especialidades de la fisioterapia',
          'Fisioterapia Vestibular' => 'Especialidades de la fisioterapia, Fisioterapia vestibular',
          'Osteopat??a Estructural' => 'Terapia Manual, T??cnicas Osteop??ticas, Visceral',
          'T??cnicas de Energ??a Muscular' => 'Terapia Manual',
          'T??cnicas Neurodin??micas' => 'Terapia Manual, Movilizaci??n Neurodin??mica',
          'TGO' => 'Terapia Manual, T??cnicas Osteop??ticas',
          'Ftp. Instrumental y Electroterapia' => 'Conocimientos b??sicos, Agentes f??sicos, Diatermia/Tecarterapia, L??ser, Electroterapia, Ultrasonido y ondas de choque, Terapia Manual, Terapia manual instrumental',
          'Ecograf??a en Fisioterapia' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Ecograf??a neuromusculoesquel??tica',
          'Electroestimulaci??n' => 'Conocimientos b??sicos, Agentes f??sicos, Electroterapia',
          'Electroterapia' => 'Conocimientos b??sicos, Agentes f??sicos, Electroterapia',
          'EPI - Electr??lisis Percut??nea Intratisular' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Electr??lisis',
          'Fibr??lisis Diacut??nea' => 'Terapia Manual, Terapia manual instrumental, Fibr??lisis diacut??nea',
          'Ftp. Instrumental' => 'Terapia Manual, Terapia manual instrumental',
          'Ftp. Invasiva' => 'Especialidades de la fisioterapia, Fisioterapia invasiva',
          'Masoterapia con Cool Roller' => 'Terapia Manual, Terapia manual instrumental, Cool Roller',
          'M??todo McConnell' => 'Terapia Manual',
          'Ondas de Choque' => 'Conocimientos b??sicos, Agentes f??sicos, ondas de choque',
          'Punci??n Seca' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Punci??n seca y punci??n seca ecoguiada',
          'Punci??n Seca Ecoguiada' => 'Especialidades de la fisioterapia, Fisioterapia invasiva, Punci??n seca y punci??n seca ecoguiada',
          'Radiolog??a - Exploraci??n por Imagen' => 'Conocimientos b??sicos, Exploraci??n y diagn??stico',
          'Tecarterapia' => 'Conocimientos b??sicos, Agentes f??sicos, Diatermia/Tecarterapia',
          'Terapia Manual Instrumentalizada by Richelli s' => 'Terapia Manual, Terapia manual instrumental, Terapia manual instrumental by Richelli???s',
          'Terapia Miofascial con 3Tool' => 'Terapia Manual, Terapia manual instrumental, 3Tool',
          'Ultrasonidos' => 'Conocimientos b??sicos, Agentes f??sicos, Ultrasonido',
          'Vendajes' => 'Conocimientos b??sicos, Agentes f??sicos, Vendajes',
          'Vendaje Funcional' => 'Conocimientos b??sicos, Agentes f??sicos, Vendajes',
          'Vendaje Neuromuscular' => 'Conocimientos b??sicos, Agentes f??sicos, Vendajes',
          'Vendaje para Linfedemas' => 'Conocimientos b??sicos, Agentes f??sicos, Vendajes',
          'T??cnicas Complementarias' => 'T??cnicas complementarias',
          'Acupuntura' => 'T??cnicas complementarias',
          'Coaching y Asesoramiento en Fisioterapia' => 'T??cnicas complementarias, Coaching en fisioterapia',
          'Nutrici??n en Fisioterapia' => 'T??cnicas complementarias, Nutrici??n y fisioterapia',
          'PNI - Psiconeuroinmunolog??a' => 'T??cnicas complementarias, Psiconeuroinmunolog??a (PNI)',
          'Reflexolog??a Podal' => 'T??cnicas complementarias',
          'Terapia con Ventosas' => 'T??cnicas complementarias'
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
