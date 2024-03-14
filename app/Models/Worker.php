<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'workers_animals','animal_id', 'worker_id');
    }
}
