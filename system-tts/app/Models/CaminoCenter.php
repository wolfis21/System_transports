<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaminoCenter extends Model
{
    use HasFactory;
    static $rules = [
        'camino_cps_id' => 'required',
        'center_cps_id' => 'required',
    ];

    protected $fillable = ['camino_cps_id', 'center_cps_id'];

    // agregar las relaciones n-m m-1 1-1

    public function camino_cp(){
        return $this->belongsToMany(Camino_cp::class);
    }

    public function center_cp(){
        return $this->belongsToMany(Center_cp::class);
    }
}
