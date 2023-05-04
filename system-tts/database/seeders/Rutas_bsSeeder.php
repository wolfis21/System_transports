<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rutas_bsSeeder extends Seeder
{   
    private $RUTAS_BS_JSON = '
    {
        "rutas_bs": [
            {
              "name": "Altavista VIII - Core 8",
              "cost": 7,
              "users_ops_id": 1
            },
            {
              "name": "Core 8 - Altavista VIII",
              "cost": 7,
              "users_ops_id": 1
            },
            {
              "name": "Altavista VIII - Sierra Parima",
              "cost": 7,
              "users_ops_id": 2
            },
            {
              "name": "Sierra Parima - Altavista VIII",
              "cost": 7,
              "users_ops_id": 2
            },
            {
              "name": "Sierra Parima II - Core 8",
              "cost": 7,
              "users_ops_id": 3
            },
            {
              "name": "Core 8 - Sierra Parima II",
              "cost": 7,
              "users_ops_id": 3
            },
            {
              "name": "Macro Centro - Villa Jade",
              "cost": 7,
              "users_ops_id": 4
            },
            {
              "name": "Villa Jade- Macro Centro",
              "cost": 7,
              "users_ops_id": 4
            },
            {
              "name": "Unare 1 - miniFinca",
              "cost": 7,
              "users_ops_id": 5
            },
            {
              "name": "macroCentro - Villa Aponwao",
              "cost": 7,
              "users_ops_id": 6
            },
            {
              "name": "Villa Aponwao - Macro Centro",
              "cost": 7,
              "users_ops_id": 6
            },
            {
              "name": "Macro Centro - Villa Bahia II",
              "cost": 7,
              "users_ops_id": 7
            },
            {
              "name": "Altavista -Villa Bolivia III - Castillito II",
              "cost": 7,
              "users_ops_id": 8
            },
            {
              "name": "Castillito II - Villa Bolivia III - Altavista",
              "cost": 7,
              "users_ops_id": 8
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
        $rutas = json_decode($this->RUTAS_BS_JSON)->rutas_bs;

        foreach ($rutas as $ruta){
            DB::table('rutas_bs')->insert([
                'name'=>$ruta->name,
                'cost'=>$ruta->cost,
                'users_ops_id'=>$ruta->users_ops_id,
            ]);
        }


    }
}
