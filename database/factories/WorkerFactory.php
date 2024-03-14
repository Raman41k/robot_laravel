<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    protected $model = Worker::class;

    protected $names = [
        'John',
        'Jane',
        'Michael',
        'Emily',
        'David',
        'Sarah',
        'Christopher',
        'Jessica',
        'Daniel',
        'Emma',
        'Matthew',
        'Olivia',
        'Andrew',
        'Sophia',
        'James',
        'Isabella',
        'William',
        'Ava',
        'Joseph',
        'Mia',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement($this->names),
            'age' => $this->faker->numberBetween(20, 60),
        ];
    }
}
