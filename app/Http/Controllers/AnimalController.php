<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::with('workers', 'food')->get();
        return view('pages.animals.animals', ['animals' => $animals]);
    }

    public function getOneAnimal(Animal $animal)
    {
        return view('pages.animals.animal', ['animal' => $animal]);
    }
}
