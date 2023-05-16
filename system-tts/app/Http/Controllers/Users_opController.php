<?php

namespace App\Http\Controllers;

use App\Models\Users_op;
use Illuminate\Http\Request;

class Users_opController extends Controller
{
    //
    public function index()
    {       //para administrador pensar 
        $users = Users_op::all();

        return view('users/index', ['users_ops' =>$users]);
    }
    
    public function create()
    {
        $user = new Users_op();
       
        return view('users.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ref' => 'required|string',
            'coordenada' =>'required|string',
            'img_ref' => 'required',
        ]);

        $users = Users_op::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'users created successfully.');
    }

    public function show($id)
    {
        $users = Users_op::find($id);

        return view('users.show', compact('users'));
    }

    public function edit($id)
    {   //pensar esto un poco
        /* $ruta = Users_op::find($id);
        $ruta_users = Users_op::find($ruta->zona_id);
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
        $users = Users_op::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'users deleted successfully');
    }

}
