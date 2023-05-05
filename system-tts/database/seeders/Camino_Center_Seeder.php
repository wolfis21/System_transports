<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Camino_Center_Seeder extends Seeder
{
    private $CAMINO_CENTER_JSON = '{
        "camino_center": [
            {
              "camino_cps_id": 1,
              "center_cps_id": 10
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 57
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 4
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 100
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 112
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 111
            },
            {
              "camino_cps_id": 1,
              "center_cps_id": 27
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 27
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 103
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 104
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 100
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 4
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 57
            },
            {
              "camino_cps_id": 2,
              "center_cps_id": 10
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 8
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 7
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 6
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 13
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 12
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 113
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 56
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 34
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 35
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 21
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 22
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 19
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 20
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 114
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 115
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 116
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 117
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 118
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 119
            },
            {
              "camino_cps_id": 3,
              "center_cps_id": 120
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 10
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 102
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 93
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 48
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 121
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 54
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 55
            },
            {
              "camino_cps_id": 4,
              "center_cps_id": 33
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 10
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 57
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 4
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 100
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 112
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 111
            },
            {
              "camino_cps_id": 6,
              "center_cps_id": 27
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
        $camino_centers = json_decode($this->CAMINO_CENTER_JSON)->camino_center;

        foreach ($camino_centers as $camino_center){
            DB::table('camino_centers')->insert([
                'camino_cps_id'=>$camino_center->camino_cps_id,
                'center_cps_id'=>$camino_center->center_cps_id,
            ]);
        }
    }
}
