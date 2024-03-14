<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animalIds = range(1, Animal::all()->count());
        $workerIds = range(1, Worker::all()->count());
        shuffle($workerIds);

        foreach ($animalIds as $animalId) {
            $numFruits = rand(1, 3);
            $selectedFruits = array_slice($workerIds, 0, $numFruits);

            foreach ($selectedFruits as $foodId) {
                DB::table('workers_animals')->insert([
                    'animal_id' => $animalId,
                    'worker_id' => $foodId,
                ]);
            }
        }
    }
}
