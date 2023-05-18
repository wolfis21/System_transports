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
        $parada = paradas_b::find($id);
        return view('parada.edit', compact('parada'));
    }

    public function update(Request $request, Paradas_b $parada)
    {
        $request->validate([
            'name_ref' => 'required|string',
            'coordenada' =>'required|string',
            'img_ref' =>'required|string',
        ]);

        $parada->update($request->all());

        return redirect()->route('parada.index')
            ->with('success', 'parada updated successfully');
    }

    public function destroy($id)
    {
        $parada = Paradas_b::find($id)->delete();

        return redirect()->route('parada.index')
            ->with('success', 'parada deleted successfully');
    }

}
