<?php

namespace App\Http\Controllers;

use App\Models\Center_cp;
use Illuminate\Http\Request;

class CentersController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $center = Center_cp::paginate(10);

        return view('center/index', ['center_cp' =>$center])
            ->with('i', (request()->input('page', 1) - 1) * $center->perPage());
    }
    
    public function create()
    {
        $center = new Center_cp();
       
        return view('center.create', compact('center'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ref' => 'required|string',
            'coordenada' =>'required|string',
            'img_ref' => 'required',
        ]);

        $center = Center_cp::create($request->all());

        return redirect()->route('center.index')
            ->with('success', 'center created successfully.');
    }

    public function show($id)
    {
        $center = Center_cp::find($id);

        return view('center.show', compact('center'));
    }

    public function edit($id)
    {   //pensar esto un poco
        /* $ruta = Center_cp::find($id);
        $ruta_center = Center_cp::find($ruta->zona_id);
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
        $center = Center_cp::find($id)->delete();

        return redirect()->route('center.index')
            ->with('success', 'center deleted successfully');
    }

}
