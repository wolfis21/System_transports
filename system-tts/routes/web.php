<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Rutas_bController;
use App\Http\Controllers\ParadasController;
use App\Http\Controllers\Camino_cpController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FactoriesFakesController;
use App\Http\Controllers\Users_opController;
use App\Models\Rutas_b;

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

Route::get('/welcome', function () {
    return view('welcome');
});
   /* HOME LADINGS */
/* Route::get('/', function () {
    return view('home/home'); 
}); */
Route::get('/', [App\Http\Controllers\FrontController::class, 'indexHome']);
Route::get('/buses', [App\Http\Controllers\FrontController::class, 'viewBuses']);
Route::get('/pisteros', [App\Http\Controllers\FrontController::class, 'viewPisteros']);
/* Route::get('/viewsMapsBuses', [App\Http\Controllers\FrontController::class, 'viewsMapsBuses']); */
Route::get('/viewsMapsPisteros/{id}', [App\Http\Controllers\FrontController::class, 'viewsMapsPisteros']);
Route::get('/viewsMapsBuses/{id}', [App\Http\Controllers\FrontController::class, 'viewsMapsBuses']);
Route::get('/viewOneParada/{id}', [App\Http\Controllers\FrontController::class, 'viewOneParada']);
Route::get('/viewOneCenter/{id}', [App\Http\Controllers\FrontController::class, 'viewOneCenter']);

/* Crear data fake */

/* Route::get('/usersFactories', [FactoriesFakesController::class, 'users_opsFactories']);
Route::get('/rutasFactories', [FactoriesFakesController::class, 'rutas_bFactories']);
Route::get('/paradasFactories', [FactoriesFakesController::class, 'paradas_bFactories']);
Route::get('/caminoFactories', [FactoriesFakesController::class, 'camino_cpFactories']);
Route::get('/centerFactories', [FactoriesFakesController::class, 'center_cpFactories']);
 */
Route::get('/migrateFake', [FactoriesFakesController::class, 'migrateFake']);
Route::get('/relacionsCCFactories', [FactoriesFakesController::class, 'caminoCenterFactories']);
Route::get('/relacionsRPFactories', [FactoriesFakesController::class, 'rutaParadaFactories']);

/* ADMIN */
/* gestion de rutas */
// Route::resource('ruta', Rutas_bController::class);

// /* gestion de paradas */
// Route::resource('parada',ParadasController::class);

// /* gestion de caminos */
// Route::resource('camino',Camino_cpController::class);

// /* gestion de center */
// Route::resource('center',CentersController::class);

// /* gestion de usuarios */
// Route::resource('users',Users_opController::class);


// /* INICIOS DE SESIONES */
// Auth::routes();
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* ADMIN */ /* Evaluar su correcta funcionalidad */
Route::middleware(['auth'])->group(function () {
    Route::resource('ruta', Rutas_bController::class);
    Route::resource('parada',ParadasController::class);
    Route::resource('camino',Camino_cpController::class);
    Route::resource('center',CentersController::class);
    Route::resource('users',Users_opController::class);
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
/* INICIOS DE SESIONES */
Auth::routes();

