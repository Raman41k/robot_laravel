<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnimalSeeder extends Seeder
{
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
    public function run(): void
    {
        $this->call([
            Animal::factory(10)->create(),
        ]);
    }
}
