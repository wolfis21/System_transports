<?php

namespace Database\Factories;

use App\Models\Paradas_b;
use App\Models\Rutas_b;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RutasParadas>
 */
class RutasParadasFactory extends Factory
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
            'rutas_b_id' => Rutas_b::all()->random()->id,
            'paradas_b_id' => Paradas_b::all()->random()->id,
        ];
    }
}
