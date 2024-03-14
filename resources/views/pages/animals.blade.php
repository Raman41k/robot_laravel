@extends('layouts.layout')

@section('content')

    <div class="flex flex-wrap justify-around mt-3">
        @foreach ($animals as $animal)
            <a href="#" class="mb-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$animal->name}}</h5>

                @foreach ($animal->workers as $worker)
                    <p class="font-normal text-gray-700 dark:text-gray-400">Workers for {{ $animal->name }} -> {{ $worker->name }}</p>
                @endforeach

                <hr>

                @foreach ($animal->food as $food)
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $animal->name }} eats -> {{ $food->name }}</p>
                @endforeach

            </a>
        @endforeach
    </div>
@endsection
