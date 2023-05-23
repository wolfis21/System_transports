<?php

namespace App\Http\Controllers;

use App\Models\Paradas_b;
use App\Models\Rutas_b;
use App\Models\RutasParadas;
use Illuminate\Http\Request;

class Rutas_bController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $rutas = Rutas_b::all();

        return view('ruta/index', ['rutas_bs' => $rutas]);
    }
    public function indexUsers()
    {
        $user = auth()->guard('users_op')->user(); // Obtener el usuario users_op autenticado
        $rutas = Rutas_b::where('users_ops_id', $user->id)->get(); // Filtrar las rutas por el users_ops_id del usuario

        return view('ruta.users.index', ['rutas_bs' => $rutas]);
    }

    public function create()
    {
        $ruta = new Rutas_b();
        $parada = Paradas_b::all();
        return view('ruta.create', compact('ruta'))->with([
            'paradas' => $parada
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' => 'required|integer',
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
        $ruta = Rutas_b::find($id);
        return view('ruta.edit', compact('ruta'));
    }
    public function editUsers($id)
    {   //pensar esto un poco
        $ruta = Rutas_b::find($id);
        return view('ruta.edit', compact('ruta'));
    }

    public function update(Request $request, Rutas_b $ruta)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' => 'required|integer',
            'users_ops_id' => 'required', /* no update */
        ]);

        $ruta->update($request->all());

        return redirect()->route('ruta.index')
            ->with('success', 'ruta updated successfully');
    }
    public function updateUsers(Request $request, Rutas_b $ruta)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' => 'required|integer',
            'users_ops_id' => 'required', /* no update */
        ]);

        $ruta->update($request->all());

        return redirect()->route('ruta.index')
            ->with('success', 'ruta updated successfully');
    }

    public function destroy($id)
    {
        $ruta = Rutas_b::find($id)->delete();

        return redirect()->route('ruta.index')
            ->with('success', 'ruta deleted successfully');
    }
}
