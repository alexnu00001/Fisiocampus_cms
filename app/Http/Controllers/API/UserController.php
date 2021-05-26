<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateUserApiRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidateCountMail;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Log;

class UserController extends Controller
{
    //
    protected $passwEncryp;
    protected $userReq;

    public function registro(Request $request){

        try {

            //Validación de campos enviados por el API
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'pais_id' => 'required'
            ]);

            if ($validator->fails()) {
                return $validator->errors();
            }

            $generatePassword = $this->generatePassword(); //Generador de contraseña
            $this->passwEncryp = Crypt::encryptString($generatePassword); //Encripta la contraseña para regresarla por la api
            Log::info(Crypt::decryptString($this->passwEncryp));
            $cryptPassw = $this->passwEncryp;
            $this->userReq = $request->email;

            $now = Carbon::now();

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            (isset($request->phone)) ? $user->phone = $request->phone : null ;
            $user->pais_id = $request->pais;
            $user->email_verified_at = $now;
            $user->password = bcrypt($generatePassword);

            if($user->save()) {
              $student = User::find($user->id);
              $student->assignRole('Estudiante'); // Asigno rol de estudiante por Spatie





              $persona = [
                'user_id' => $user->id,
                'nombre' => $request->name,
                'estado_civil' => '',
                'telefono' => (isset($request->phone)) ? $request->phone : null ,
                'movil' => (isset($request->phone)) ? $request->phone : null,
                'email' => $request->email,
                'preparacion_academica' => ''
              ];

              $persona = Persona::create($persona);

              $estudiante = Estudiante::create([
                'persona_id' => $persona->id,
                'escuela_id' => null,
                'estudio_academico_id' => null,
                'resumen' => '_',
                'sobre_mi' => '_',
                'redes' => '',
                'ubicacion' =>  $request->pais,
                'avatar' => '',
                'uid_interno' => '',
                'job' => '',
                'especialidad' => ''
              ]);
              try {
                Mail::to($request->email)->send( new ValidateCountMail(\Crypt::encrypt($user->id), $generatePassword));

                return response()->json([
                  'success' => true,
                  'message' => 'Se almacenó correctamente',
                  'payload' => [
                      'passw' => $this->passwEncryp,
                      'user' => $this->userReq
                    ]
                ], 201);

              } catch (\Exception $ex) {
                \Log::info($ex->getMessage() . ' Archivo: ' . $ex->getFile() . ' Codigo '. $ex->getCode() . ' Linea: ' . $ex->getLine());
                return response()->json([
                  'success' => false,
                  'message' => 'Error al envíar el correo',
                  'payload' => [
                    'passw' => $this->passwEncryp,
                    'user' => $this->userReq
                  ]
                ], 206);
              }
            }

          } catch (\Exceptione $e) {
            \Log::info($e->getMessage() . ' Archivo: ' . $e->getFile() . ' Codigo '. $e->getCode() . ' Linea: ' . $e->getLine());
            return response()->json([
              'success' => false,
              'message' => 'Validar el error con el administrador'
            ], 400);
          }
    }

    public function generatePassword()
    {
        try{
            $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $first='';
            $second='';
            for($i=0;$i<4;$i++){
                $first .= substr($caracteres,rand(0,strlen($caracteres)),1);
            }
            for($i=0;$i<4;$i++){
                $second .= substr($caracteres,rand(0,strlen($caracteres)),1);
            }
            return $first.$second;
        } catch(\Exception $e){
            \Log::info($e->getMessage() . ' Archivo: ' . $e->getFile() . ' Codigo '. $e->getCode() . ' Linea: ' . $e->getLine());
            \Log::error(' Trace2: ' .$e->getTraceAsString());
        }
    }
}
