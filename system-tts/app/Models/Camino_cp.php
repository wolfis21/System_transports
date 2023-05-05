<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Center_cp;

class Camino_cp extends Model
{
    use HasFactory;
    static $rules = [
        'name' => 'required',
        'cost' => 'required',
        'users_op_id' => 'required',
    ];

    protected $fillable = ['name', 'cost','users_op_id'];

    // agregar las relaciones n-m m-1 1-1

    public function users_op(){
        return $this->hasOne(Users_op::class);
    }

    public function center(){
        return $this->belongsToMany(Center_cp::class, 'camino_centers', 'camino_cps_id', 'center_cps_id');
    }
}
