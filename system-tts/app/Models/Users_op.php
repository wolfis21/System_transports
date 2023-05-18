<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_op extends Model
{
    use HasFactory;
    static $rules = [
        'dni' => 'required',
        'name' => 'required',
        'nacimiento' => 'required',
        'email' => 'required',
        'password' => 'required',
        'type_service_id' => 'required',
    ];

    protected $fillable = ['dni', 'name','nacimiento','email', 'password', 'type_service_id'];

    // agregar las relaciones n-m m-1 1-1

    public function Type_service(){
        return $this->belongsTo(Type_service::class);
    }
    public function ruta(){
        return $this->hasMany(Rutas_b::class);
    }
}
