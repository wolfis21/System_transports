<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paradas_b extends Model
{
    use HasFactory;
    static $rules = [
        'name_ref' => 'required',
        'coordenada' => 'required',
        'img_ref' => 'required',
    ];

    protected $fillable = ['name_ref', 'coordenada','img_ref'];

    // agregar las relaciones n-m m-1 1-1

    public function rutas_b(){
        return $this->belongsToMany(Rutas_b::class);
    }
}
