<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Type_service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Type_serviceTableSeeder::class,
            Users_opTableSeeder::class,
            Paradas_bsSeeder::class,
            Rutas_bsSeeder::class,
            Center_cpsSeeder::class,
            Camino_cpsSeeder::class,
            Rutas_Paradas_Seeder::class,
            Camino_Center_Seeder::class
        ]);
    }
}
