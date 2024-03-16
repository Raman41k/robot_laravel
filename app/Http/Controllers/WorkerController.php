<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::with('animals')->get();
        return view('pages.workers.workers', ['workers' => $workers]);
    }

    public function getOneWorker(Worker $worker)
    {
        return view('pages.workers.worker', ['worker' => $worker]);
    }
}
