<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paradas_b>
 */
class Paradas_bFactory extends Factory
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
            
            'name_ref' => fake()->name(),
            'coordenada' => fake()->latitude(). ','. fake()->longitude(), //evaluar
            'img_ref' => fake()->name(). 'jpg',
            
        ];
    }
}
