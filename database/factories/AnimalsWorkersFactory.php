<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnimalsWorkersFactory extends Factory
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
                'worker_id' => $this->faker->numberBetween(1, 10),
            ])
        ];
    }
}
