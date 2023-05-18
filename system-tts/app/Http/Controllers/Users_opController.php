<?php

namespace App\Http\Controllers;

use App\Models\Type_service;
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
            'dni' => 'required|string',
            'name' =>'required|string',
            'nacimiento' => 'required|date',
            'email' => 'required|string',
            'password' => 'required|string',
            'type_service_id' => 'required',
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
        $users = Users_op::find($id);
        $type = Type_service::all();

        return view('users.edit', compact('users'))->with([
            'type_service' => $type,
        ]);
    }

    public function update( Request $request, Users_op $users )
    {
        $request->validate([
            'dni' => 'required|string',
            'name' =>'required|string',
            'nacimiento' => 'required|date',
            'email' => 'required|string',
            'password' => 'required|string',
            'type_service_id' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($request->password); // encriptar la contraseña antes de guardarla
    
        $users->update($input);
    
        return redirect()->route('users.index')
            ->with('success', 'users updated successfully');
    }

    public function destroy($id)
    {
        $users = Users_op::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'users deleted successfully');
    }

}
