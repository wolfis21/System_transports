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
    public function indexUsers()
    {
        $user = auth()->guard('users_op')->user(); // Obtener el usuario users_op autenticado
        $caminos = Camino_cp::where('users_ops_id', $user->id)->get(); // Filtrar las rutas por el users_ops_id del usuario

        return view('camino.users.index', ['camino_cp' => $caminos]);
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
        $camino = Camino_cp::find($id);
        return view('camino.edit', compact('camino'));
    }
    public function editUsers($id) //users
    {   //pensar esto un poco
        $camino = Camino_cp::find($id);
        return view('camino.users.edit', compact('camino'));
    }

    public function update(Request $request, Camino_cp $camino)
    {
        $request->validate([
            'name' => 'required|string',
            'cost' =>'required|integer',
            'users_ops_id' => 'required',
        ]);

        $camino->update($request->all());

        return redirect()->route('camino.index')
            ->with('success', 'camino updated successfully');
    }
    public function updateUsers(Request $request, Camino_cp $camino) //users
    {
        $request->validate([
            'name' => 'required|string',
            'cost' =>'required|integer',
            'users_ops_id' => 'required',
        ]);

        $camino->update($request->all());

        return redirect()->route('camino.users.index')
            ->with('success', 'camino updated successfully');
    }

    public function destroy($id)
    {
        $camino = Camino_cp::find($id)->delete();

        return redirect()->route('camino.index')
            ->with('success', 'camino deleted successfully');
    }
}
