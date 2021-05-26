<?php
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// Route url
Route::get('/', 'DashboardController@dashboardAnalytics')->middleware('auth');



// Auth::routes();

Route::post('/login/validate', 'Auth\LoginController@validate_api');

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);


Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::resource('roles', 'RoleController');


Route::resource('permissions', 'PermissionController');


Route::resource('users', 'UserController');


Route::post('/updatePermissionRole', 'RoleController@updatePermissionRole')->name('updatePermissionRole');



Route::resource('cursos', 'CursoController');

Route::resource('pais', 'PaisController');


Route::resource('grados', 'GradoController');

Route::resource('monedas', 'MonedaController');


Route::resource('tipoOfertas', 'TipoOfertaController');

Route::resource('ofertas', 'OfertaController');

Route::resource('planEstudios', 'PlanEstudioController');

Route::resource('secuenciaAprendizajes', 'SecuenciaAprendizajeController');

Route::resource('odas', 'OdaController');

Route::resource('lenguajes', 'LenguajeController');

Route::resource('personas', 'PersonaController');

Route::resource('tipoContenidos', 'TipoContenidoController');

Route::resource('tipoOdas', 'TipoOdaController');

Route::resource('estudiantes', 'EstudianteController');


Route::resource('tipoProfesors', 'TipoProfesorController');

Route::resource('tipoCursos', 'TipoCursosController');

Route::resource('tipoAlumnos', 'TipoAlumnoController');

Route::resource('tipoPagos', 'TipoPagoController');

Route::resource('sedes', 'SedeController');

Route::resource('tipoCongresos', 'TipoCongresoController');

Route::resource('estatuses', 'EstatusController');

Route::resource('categoriaCongresos', 'CategoriaCongresoController');

Route::resource('direccions', 'DireccionController');

Route::resource('profesors', 'ProfesorController');

Route::resource('congresos', 'CongresoController');

Route::resource('modalidades', 'ModalidadesController');

Route::resource('categorias', 'CategoriaController');

Route::get('migracion','SetupController@index')->name('migracion');

Route::post('migracion_1','SetupController@migracion_1')->name('migracion_1');
Route::post('migracion_profesores','SetupController@migracionProfesores')->name('migracionProfesores');
Route::post('migracion_aulas','SetupController@migracionAulas')->name('migracionAulas');
Route::post('migracionUsuarios','SetupController@migracionUsuarios')->name('migracionUsuarios');
Route::post('migracionCategorias','SetupController@migracionCategorias')->name('migracionCategorias');

Route::resource('logros', 'LogroController');

Route::resource('autors', 'AutorController');

Route::resource('articulos', 'ArticuloController');
Route::post('imagen-blog/upload', 'ArticuloController@upload')->name('articulos.upload');

Route::resource('controlSuscripcions','ControlSuscripcionController');


Route::resource('escuelas', App\Http\Controllers\EscuelaController::class);


Route::resource('inscripcionTipos', App\Http\Controllers\Inscripcion_tipoController::class);

Route::resource('inscripcions', App\Http\Controllers\InscripcionController::class);

Route::resource('ofertaInscripcions', App\Http\Controllers\OfertaInscripcionController::class);

Route::resource('ofertaCategorias', App\Http\Controllers\OfertaCategoriaController::class);


Route::resource('estudianteOfertas', App\Http\Controllers\EstudianteOfertaController::class);


Route::resource('tipoCalificacions', tipo_calificacionController::class);

Route::resource('calificacionOfertaCursos', calificacion_oferta_cursoController::class);


// =============================================================================
// Route test
// =============================================================================
Route::view('/test', 'test', ['name' => 'test']);