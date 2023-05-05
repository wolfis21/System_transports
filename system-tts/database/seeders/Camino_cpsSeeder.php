<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Camino_cpsSeeder extends Seeder
{   
    private $CAMINO_CPS_JSON = '
    {
        "camino_cps": [
            {
              "name": "Altavista VIII",
              "cost": 20,
              "users_ops_id": 9
            },
            {
              "name": "Core 8",
              "cost": 20,
              "users_ops_id": 10
            },
            {
              "name": "Trebol",
              "cost": 10,
              "users_ops_id": 11
            },
            {
              "name": "San Felix",
              "cost": 20,
              "users_ops_id": 12
            },
            {
              "name": "Los Olivos",
              "cost": 10,
              "users_ops_id": 13
            },
            {
              "name": "Castillito",
              "cost": 10,
              "users_ops_id": 14
            }
           ]
    }';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caminos = json_decode($this->CAMINO_CPS_JSON)->camino_cps;

        foreach ($caminos as $camino){
            DB::table('camino_cps')->insert([
                'name'=>$camino->name,
                'cost'=>$camino->cost,
                'users_ops_id'=>$camino->users_ops_id,
            ]);
        }


    }
}
