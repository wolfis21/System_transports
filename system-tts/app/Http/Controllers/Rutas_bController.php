<?php

namespace App\Http\Controllers;

use App\Models\Paradas_b;
use App\Models\Rutas_b;
use Illuminate\Http\Request;

class Rutas_bController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $rutas = Rutas_b::all();

        return view('ruta/index', ['rutas_bs' =>$rutas]);
    }
    
    public function create()
    {
        $ruta = new Rutas_b();
        $parada = Paradas_b::all();
        return view('ruta.create', compact('ruta'))->with([
            'paradas'=> $parada
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' =>'required|integer',
            'users_ops_id' => 'required',
        ]);

        $ruta_b = Rutas_b::create($request->all());

        return redirect()->route('ruta.index')
            ->with('success', 'ruta created successfully.');
    }

    public function show($id)
    {
        $ruta = Rutas_b::find($id);

        return view('ruta.show', compact('ruta'));
    }

    public function edit($id)
    {   //pensar esto un poco
        /* $ruta = Rutas_b::find($id);
        $ruta_parada = Paradas_b::find($ruta->zona_id);
        $zonas = Zona::all();

        return view('empleado.edit', compact('empleado'))->with([
            'zonas' => $zonas,
            'zona_empleado' =>$zona_empleado,
        ]);; */
    }

    public function update(/* Request $request, Empleado $empleado */)
    {
/*         $request->validate([
            'cedula' => 'required|integer',
            'pname' =>'required|string',
            'psubname' =>'required|string',
            'fecha_n' =>'required|date',
            'direccion' =>'required|string',
            'telefono' =>'required|integer|min:8',
            'cargo' =>'required|string',
            'zona_id' => 'required',
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleado.index')
            ->with('success', 'empleado updated successfully'); */
    }

    public function destroy($id)
    {
        $ruta = Rutas_b::find($id)->delete();

        return redirect()->route('ruta.index')
            ->with('success', 'ruta deleted successfully');
    }

}
