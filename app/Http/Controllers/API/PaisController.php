<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //
    public function listaDePaises(){
        try {
            return response()->json([
              'success' => true,
              'message' => 'Lista de paises',
              'payload' => Pais::listaDePaises()
            ], 200);
          } catch (\Exceptione $e) {
            \Log::info($e->getMessage() . ' Archivo: ' . $e->getFile() . ' Codigo '. $e->getCode() . ' Linea: ' . $e->getLine());
            return response()->json([
              'success' => false,
              'message' => 'Validar el error con el administrador'
            ], 400);
          }
    }
}
