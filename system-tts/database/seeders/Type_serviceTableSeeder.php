<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Model\Type_service;

class Type_serviceTableSeeder extends Seeder
{   
    private $TYPE_SERVICE_JSON = '
    {
        "type_service" :[
            {
                "id": 1,
                "rol_service" : "Autobusero"         
            },
            {
                "id": 2,
                "rol_service" : "Pistero"
            }
        ]
    }
        ';
        
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types  = json_decode($this->TYPE_SERVICE_JSON)->type_service;
        
        foreach ($types as $type){
            DB::table('Type_service')->insert([
                'id'=>$type->id,
                'rol_service'=>$type->rol_service,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
