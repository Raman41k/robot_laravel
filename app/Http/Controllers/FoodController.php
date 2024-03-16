<?php

namespace App\Http\Controllers;

use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::with('animals')->get();
        return view('pages.food.foods', ['foods' => $foods]);
    }

    public function getOneFood(Food $food)
    {
        return view('pages.food.food', ['food' => $food]);
    }
}
