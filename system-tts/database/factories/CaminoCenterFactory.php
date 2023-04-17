<?php

namespace Database\Factories;

use App\Models\Camino_cp;
use App\Models\Center_cp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaminoCenter>
 */
class CaminoCenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'camino_cps_id' => Camino_cp::all()->random()->id,
            'center_cps_id' => Center_cp::all()->random()->id,
        ];
    }
}
