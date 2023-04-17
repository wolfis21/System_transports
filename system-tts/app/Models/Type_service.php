<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_service extends Model
{
    use HasFactory;
    static $rules = [
        'rol_service' => 'required',
    ];

    protected $fillable = ['rol_service'];

    // agregar las relaciones n-m m-1 1-1 (evaluar)
}
