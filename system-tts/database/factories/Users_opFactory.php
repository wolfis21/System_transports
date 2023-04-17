<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users_op>
 */
class Users_opFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'dni' =>fake()->unique()->numberBetween(10000000, 99999999),
                'name' => fake()->name(),
                'nacimiento' => fake()->dateTimeBetween('-1 year', 'now'),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
                'type_service_id' => fake()->randomElement([1, 2]),
                'remember_token' => Str::random(10),
        ];
    }
}
