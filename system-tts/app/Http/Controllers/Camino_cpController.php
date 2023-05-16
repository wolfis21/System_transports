<?php

namespace App\Http\Controllers;

use App\Models\Camino_cp;
use App\Models\Center_cp;
use Illuminate\Http\Request;

class Camino_cpController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $caminos = Camino_cp::all();

        return view('camino/index', ['camino_cp' =>$caminos]);
    }
    
    public function create()
    {
        $camino = new Camino_cp();
        $center = Center_cp::all();
        return view('camino.create', compact('camino'))->with([
            'centers'=> $center
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' =>'required|integer',
            'users_ops_id' => 'required',
        ]);

        $camino_b = Camino_cp::create($request->all());

        return redirect()->route('camino.index')
            ->with('success', 'camino created successfully.');
    }

    public function show($id)
    {
        $camino = Camino_cp::find($id);

        return view('camino.show', compact('camino'));
    }

    public function edit($id)
    {   //pensar esto un poco
        /* $camino = caminos_b::find($id);
        $camino_parada = Paradas_b::find($camino->zona_id);
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
        $camino = Camino_cp::find($id)->delete();

        return redirect()->route('camino.index')
            ->with('success', 'camino deleted successfully');
    }
}
