<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'workers_animals','animal_id', 'worker_id');
    }

    public function food()
    {
        return $this->belongsToMany(Food::class, 'animals_food','animal_id', 'food_id');
    }

}
