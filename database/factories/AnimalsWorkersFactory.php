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
        $animals = Animal::all()->pluck('id');
        $worker = Worker::all()->pluck('id');
        return [
            'animal_id' => $animals->random(),
            'worker_id' => $worker->random(),
        ];
    }
}
