<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\OfertaController;
use App\Http\Controllers\API\PaisController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ArticulosController;
use App\Models\Articulo;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
  'prefix' => 'auth'
], function () {
  Route::post('login', 'AuthController@login');
  Route::post('register', 'AuthController@register');

  Route::group([
    'middleware' => 'auth:api'
  ], function() {
      Route::get('logout', 'AuthController@logout');
      Route::get('user', 'AuthController@user');
  });
});

//Rutas de APIs
Route::group([
  'middleware' => 'cors'
], function() {
  Route::get('/lista-de-ofertas', [OfertaController::class, 'listaDeOfertas']);
  Route::get('/lista-de-paises', [PaisController::class, 'listaDePaises']);
  Route::post('/registro', [UserController::class, 'registro']);

  Route::get('/Articulos', [ArticulosController::class, 'verArticulos']);
  Route::get('/Articulo/{id}',[ArticulosController::class,'verArticulo']);
});


