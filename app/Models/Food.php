<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'animals_food','animal_id', 'food_id');
    }
}
