<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rutas_Paradas_Seeder extends Seeder
{
    private $RUTAS_PARADAS_JSON = '{
        "rutas_paradas": [
        {
          "rutas_b_id": 1,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 57
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 4
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 100
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 112
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 111
        },
        {
          "rutas_b_id": 1,
          "paradas_b_id": 27
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 27
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 103
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 104
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 100
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 4
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 57
        },
        {
          "rutas_b_id": 2,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 57
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 67
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 3
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 86
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 89
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 31
        },
        {
          "rutas_b_id": 3,
          "paradas_b_id": 95
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 95
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 31
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 89
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 86
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 3
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 67
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 57
        },
        {
          "rutas_b_id": 4,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 5,
          "paradas_b_id": 95
        },
        {
          "rutas_b_id": 5,
          "paradas_b_id": 112
        },
        {
          "rutas_b_id": 5,
          "paradas_b_id": 111
        },
        {
          "rutas_b_id": 5,
          "paradas_b_id": 27
        },
        {
          "rutas_b_id": 5,
          "paradas_b_id": 59
        },
        {
          "rutas_b_id": 6,
          "paradas_b_id": 59
        },
        {
          "rutas_b_id": 6,
          "paradas_b_id": 27
        },
        {
          "rutas_b_id": 6,
          "paradas_b_id": 111
        },
        {
          "rutas_b_id": 6,
          "paradas_b_id": 112
        },
        {
          "rutas_b_id": 6,
          "paradas_b_id": 95
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 85
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 67
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 99
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 51
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 52
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 122
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 92
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 41
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 104
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 106
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 108
        },
        {
          "rutas_b_id": 7,
          "paradas_b_id": 109
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 109
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 108
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 106
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 104
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 41
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 92
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 122
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 52
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 51
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 99
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 67
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 85
        },
        {
          "rutas_b_id": 8,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 9,
          "paradas_b_id": 99
        },
        {
          "rutas_b_id": 9,
          "paradas_b_id": 91
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 102
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 93
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 48
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 54
        },
        {
          "rutas_b_id": 10,
          "paradas_b_id": 97
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 97
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 54
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 48
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 93
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 102
        },
        {
          "rutas_b_id": 11,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 10
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 85
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 67
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 99
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 51
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 52
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 122
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 92
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 41
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 104
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 106
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 108
        },
        {
          "rutas_b_id": 12,
          "paradas_b_id": 109
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 8
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 7
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 6
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 13
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 12
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 113
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 56
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 34
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 35
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 21
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 22
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 19
        },
        {
          "rutas_b_id": 13,
          "paradas_b_id": 20
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 19
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 22
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 21
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 35
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 34
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 56
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 113
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 25
        },
        {
          "rutas_b_id": 14,
          "paradas_b_id": 10
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
        $rutas_paradas = json_decode($this->RUTAS_PARADAS_JSON)->rutas_paradas;

        foreach ($rutas_paradas as $ruta_parada){
            DB::table('rutas_paradas')->insert([
                'rutas_b_id'=>$ruta_parada->rutas_b_id,
                'paradas_b_id'=>$ruta_parada->paradas_b_id,
            ]);
        }
    }
}
