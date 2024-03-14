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
        return [
            DB::table('workers_animals')->insert([
                'animal_id' => $this->faker->numberBetween(1, 10),
                'food_id' => $this->faker->numberBetween(1, 10),
            ])
        ];
    }
}
