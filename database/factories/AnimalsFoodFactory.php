<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AnimalsFoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $animals = Animal::all()->pluck('id');
        $food = Food::all()->pluck('id');
        return [
            'animal_id' => $animals->random(),
            'food_id' => $food->random(),
        ];
    }
}
