<?php

namespace App\Http\Controllers;

use App\Models\Paradas_b;
use App\Models\Rutas_b;
use Illuminate\Http\Request;

class ParadasController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $paradas = Paradas_b::paginate(10);

        return view('parada/index', ['paradas_b' =>$paradas])
            ->with('i', (request()->input('page', 1) - 1) * $paradas->perPage());
    }
    
    public function create()
    {
        $parada = new Paradas_b();
       
        return view('parada.create', compact('parada'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ref' => 'required|string',
            'coordenada' =>'required|string',
            'img_ref' => 'required',
        ]);

        $parada = Paradas_b::create($request->all());

        return redirect()->route('parada.index')
            ->with('success', 'parada created successfully.');
    }

    public function show($id)
    {
        $parada = Paradas_b::find($id);

        return view('parada.show', compact('parada'));
    }

    public function edit($id)
    {   //pensar esto un poco
        /* $ruta = paradas_b::find($id);
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
        $parada = Paradas_b::find($id)->delete();

        return redirect()->route('parada.index')
            ->with('success', 'parada deleted successfully');
    }

}
