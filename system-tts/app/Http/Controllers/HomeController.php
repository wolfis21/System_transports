<?php

namespace App\Http\Controllers;

use App\Models\Camino_cp;
use App\Models\Paradas_b;
use App\Models\Rutas_b;
use App\Models\Center_cp;
use Illuminate\Http\Request;

/* 
     DESACTIVADO

*/

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function indexHome(){

        $rutas = Rutas_b::take(4)->get();
        $camino =Camino_cp::take(4)->get();

        return view('home/home', [
            'rutas_bs' =>$rutas,
            'camino_cp' =>$camino]); 
    }
    public function viewBuses(){
        $rutas = Rutas_b::all();

        return view('home/buses', ['rutas_bs' =>$rutas]);
    }
    public function viewPisteros(){
        $camino = Camino_cp::all();

        return view('home/pisteros',['camino_cp' =>$camino] );
    }
    public function viewsMapsBuses($id){
        $ruta = Rutas_b::with('paradas')->findOrFail($id);
        return view('home/maps-buses', compact('ruta'));
    }
    public function viewsMapsPisteros($id){
        $camino = Camino_cp::with('center')->findOrFail($id);
        return view('home/maps-pisteros', compact('camino'));
    }
    public function viewOneParada($id){
        $paradaOne = Paradas_b::findOrFail($id);
        return view('home/one-parada', compact('paradaOne'));
    }
    public function viewOneCenter($id){
        $centerOne = Center_cp::findOrFail($id);
        return view('home/one-center', compact('centerOne'));
    }

}
