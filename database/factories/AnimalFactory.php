<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    protected $names = [
        'Dog',
        'Cat',
        'Elephant',
        'Lion',
        'Tiger',
        'Giraffe',
        'Monkey',
        'Bear',
        'Zebra',
        'Horse',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->names),
        ];
    }
}
