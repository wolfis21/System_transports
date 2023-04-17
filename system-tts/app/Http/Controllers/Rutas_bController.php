<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rutas_bController extends Controller
{
    //
    public function index()
    {
        return view('home/buses');
    }
    
}
