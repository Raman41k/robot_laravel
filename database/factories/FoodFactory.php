<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    protected $model = Food::class;

    protected $names = [
        'Apple',
        'Banana',
        'Orange',
        'Grapes',
        'Strawberry',
        'Watermelon',
        'Pineapple',
        'Mango',
        'Peach',
        'Pear',
        'Kiwi',
        'Cherry',
        'Lemon',
        'Blueberry',
        'Raspberry',
        'Blackberry',
        'Cantaloupe',
        'Fig',
        'Plum',
        'Coconut',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($this->names),
        ];
    }
}
