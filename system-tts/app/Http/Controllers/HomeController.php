<?php

namespace App\Http\Controllers;

use App\Models\Camino_cp;
use App\Models\Rutas_b;
use Illuminate\Http\Request;

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
        $ruta = Rutas_b::findOrFail($id);
        return view('home/maps-buses', compact('ruta'));
    }
    public function viewsMapsPisteros(){
        return view('home/maps-pisteros');
    }

}
