<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoOferta;

class OfertaController extends Controller
{
    //
    public function listaDeOfertas(){
        try {
            //code...
            return response()->json([
              'success' => true,
              'message' => 'Lista de ofertas',
              'payload' => TipoOferta::listaDeOfertas()
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
