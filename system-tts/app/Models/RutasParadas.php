<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutasParadas extends Model
{
    use HasFactory;
    static $rules = [
        'rutas_b_id' => 'required',
        'paradas_b_id' => 'required',
    ];

    protected $fillable = ['rutas_b_id', 'paradas_b_id'];

    // agregar las relaciones n-m m-1 1-1

    public function rutas_b(){
        return $this->belongsToMany(Rutas_b::class);
    }

    public function paradas_b(){
        return $this->belongsToMany(Paradas_b::class);
    }
}
