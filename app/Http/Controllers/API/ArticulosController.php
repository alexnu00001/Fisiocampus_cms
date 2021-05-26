<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticulosController extends Controller
{
    public function verArticulos(){
  		$articulos = Articulo::all();
  		foreach ($articulos as $articulo) {
  			$articulo->autor = $articulo->autor;
  		}

  		if(empty($articulos)){
  			return 'No se encuentran los articulos';
  		}

    	return response()->json([
    		'articulos' => $articulos
    	]);
    }

    public function verArticulo($id){
    	$articulos = Articulo::find($id);
    	$articulos->autor = $articulos->autor;
    	if(empty($articulos)){

    		return 'No se encuentra el articulo';
    	}
    	return response()->json([
    		'articulos' => $articulos
    	]);
    }
}
