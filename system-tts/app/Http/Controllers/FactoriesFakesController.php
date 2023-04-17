<?php

namespace App\Http\Controllers;

use App\Models\Camino_cp;
use App\Models\CaminoCenter;
use App\Models\Center_cp;
use Illuminate\Http\Request;
use App\Models\Users_op;
use App\Models\Rutas_b;
use App\Models\Paradas_b;
use App\Models\RutasParadas;

class FactoriesFakesController extends Controller
{
    //

    public function migrateFake()
    {
        Users_op::factory()->count(10)->create();
        Rutas_b::factory()->count(5)->create();
        Paradas_b::factory()->count(20)->create();
        Camino_cp::factory()->count(5)->create();
        Center_cp::factory()->count(10)->create();

        return "10 users resposables creados <br>
        5 rutas creadas <br>
        20 paradas creadas <br>
        5 caminos creados <br>
        5 caminos creados <br>
        10 centros creados <br>";
    }
    /*     public function users_opsFactories (){
        return "10 users resposables creados";
    } */

    /*     public function rutas_bFactories (){
        return "5 rutas creadas";
    }
     */
    /*     public function paradas_bFactories (){
        return "20 paradas creadas";
    }
     */
    /*     public function camino_cpFactories (){
        return "5 caminos creados";
    } */

    /*     public function center_cpFactories (){
        return "10 centros creados";
    } */

    public function caminoCenterFactories()
    {
        CaminoCenter::factory()->count(10)->create();
        return "10 relaciones creadas";
    }
    public function rutaParadaFactories()
    {
        RutasParadas::factory()->count(10)->create();
        return "10 relaciones creadas";
    }
}
