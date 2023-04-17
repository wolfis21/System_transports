<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FactoriesFakesController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'indexHome']);
Route::get('/buses', [App\Http\Controllers\HomeController::class, 'viewBuses']);
Route::get('/pisteros', [App\Http\Controllers\HomeController::class, 'viewPisteros']);
/* Route::get('/viewsMapsBuses', [App\Http\Controllers\HomeController::class, 'viewsMapsBuses']); */
Route::get('/viewsMapsPisteros', [App\Http\Controllers\HomeController::class, 'viewsMapsPisteros']);
Route::get('/viewsMapsBuses/{id}', [App\Http\Controllers\HomeController::class, 'viewsMapsBuses']);

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



/* INICIOS DE SESIONES */
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


