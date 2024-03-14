<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animalIds = range(1, Animal::all()->count());
        $foodIds = range(1, Food::all()->count());
        shuffle($foodIds);

        foreach ($animalIds as $animalId) {
            $numFruits = rand(1, 5);
            $selectedFruits = array_slice($foodIds, 0, $numFruits);

            foreach ($selectedFruits as $foodId) {
                DB::table('animals_food')->insert([
                    'animal_id' => $animalId,
                    'food_id' => $foodId,
                ]);
            }
        }
    }
}
