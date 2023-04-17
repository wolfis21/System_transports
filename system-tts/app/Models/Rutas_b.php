<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas_b extends Model
{
    use HasFactory;

    static $rules = [
        'name' => 'required',
        'cost' => 'required',
        'users_op_id' => 'required',
    ];

    protected $fillable = ['name', 'cost','users_op_id'];

    public function users_op(){
        return $this->hasOne(Users_op::class);
    }
    public function paradas_b(){
        return $this->belongsToMany(Paradas_b::class);
    }
}
