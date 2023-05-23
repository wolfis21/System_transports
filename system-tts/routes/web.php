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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\FrontController::class, 'indexHome']);
Route::get('/buses', [App\Http\Controllers\FrontController::class, 'viewBuses']);
Route::get('/pisteros', [App\Http\Controllers\FrontController::class, 'viewPisteros']);
/* Route::get('/viewsMapsBuses', [App\Http\Controllers\FrontController::class, 'viewsMapsBuses']); */
Route::get('/viewsMapsPisteros/{id}', [App\Http\Controllers\FrontController::class, 'viewsMapsPisteros']);
Route::get('/viewsMapsBuses/{id}', [App\Http\Controllers\FrontController::class, 'viewsMapsBuses']);
Route::get('/viewOneParada/{id}', [App\Http\Controllers\FrontController::class, 'viewOneParada']);
Route::get('/viewOneCenter/{id}', [App\Http\Controllers\FrontController::class, 'viewOneCenter']);

Route::get('/migrateFake', [FactoriesFakesController::class, 'migrateFake']);
Route::get('/relacionsCCFactories', [FactoriesFakesController::class, 'caminoCenterFactories']);
Route::get('/relacionsRPFactories', [FactoriesFakesController::class, 'rutaParadaFactories']);

Route::get('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@showLoginForm')->name('login.usersops');
Route::post('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@login')->name('login.usersop.submit');
Route::post('logout-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@logout')->name('logout.usersops');

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

