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

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
/* Route::get('/dashboard-admin-bus', function () {
    return view('dashboard/dashboard-admin-bus');
});
Route::get('/dashboard-admin-pistero', function () {
    return view('dashboard/dashboard-admin-pistero');
});
 */

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
/* 
Route::get('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@showLoginForm')->name('login.usersops');
Route::post('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@login')->name('login.usersop.submit');
Route::post('logout-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@logout')->name('logout.usersops'); */

Route::group(['middleware' => ['auth:users_op']], function () {
    Route::get('/dashboard-admin-bus', function () {
        return view('dashboard/dashboard-admin-bus');
    })->name('dashboard.admin.bus');

    Route::get('/dashboard-admin-pistero', function () {
        return view('dashboard/dashboard-admin-pistero');
    })->name('dashboard.admin.pistero');
    Route::resource('parada',ParadasController::class); //tiene que ser distinta
    Route::resource('center',CentersController::class); //tiene que ser distinta
    Route::post('logout-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@logout')->name('logout.usersops'); 
    Route::get('ruta/users/users', [Rutas_bController::class, 'indexUsers'])->name('ruta.users.index');
    Route::get('ruta/{id}/users/edit', [Rutas_bController::class, 'editUsers'])->name('ruta.users.edit');
    Route::put('ruta/{id}/users/update', [Rutas_bController::class, 'updateUsers'])->name('ruta.users.update');
    Route::get('camino/users/users', [Camino_cpController::class, 'indexUsers'])->name('camino.users.index');
    Route::get('camino/{id}/users/edit', [Camino_cpController::class, 'editUsers'])->name('camino.users.edit');
    Route::put('camino/{id}/users/update', [Camino_cpController::class, 'updateUsers'])->name('camino.users.update');
    
});

Route::get('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@showLoginForm')->name('login.usersops');
Route::post('login-usersop', 'App\Http\Controllers\Auth\Users_op\LoginController@login')->name('login.usersop.submit');

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

