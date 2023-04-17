<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rutas_b>
 */
class Rutas_bFactory extends Factory
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
            'name' => fake()->name(),
            'cost' => fake()->randomElement([7, 10]),
            'users_ops_id' => fake()->randomElement([1, 10]),
            
        ];
    }
}
