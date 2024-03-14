<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Animal;
use App\Models\Food;
use App\Models\Worker;
use Database\Factories\AnimalsFoodFactory;
use Database\Factories\AnimalsWorkersFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Animal::factory(10)->create();
        Food::factory(10)->create();
        Worker::factory(10)->create();
        $this->call([
            AnimalFoodSeeder::class,
            AnimalWorkerSeeder::class
        ]);
    }
}
