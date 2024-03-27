<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.layout');
})->name('home');

Route::get('/animals', [AnimalController::class, 'index'])->name('animals');
Route::get('/food', [FoodController::class, 'index'])->name('food.all');
Route::get('/workers', [WorkerController::class, 'index'])->name('workers');

Route::get('/animals/{animal}', [AnimalController::class, 'getOneAnimal'])->name('animals.animal');
Route::get('/food/{food}', [FoodController::class, 'getOneFood'])->name('food.food');
Route::get('/workers/{worker}', [WorkerController::class, 'getOneWorker'])->name('workers.worker');

Route::get('/gunStrategy', [HeroController::class, 'strategyPattern']);
Route::get('/gunFactory', [HeroController::class, 'factoryPattern']);
