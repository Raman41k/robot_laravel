@if(isset($foods))
    @foreach ($foods as $food_item)
        <a href="{{ route('food.food', ['food' => $food_item]) }}" class="mb-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$food_item->name}}</h5>

            @foreach ($food_item->animals as $animal)
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $animal->name }} eats -> {{ $food_item->name }}</p>
            @endforeach
        </a>
    @endforeach
@endif

@if(isset($food))
    <span class="mb-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$food->name}}</h5>

        @foreach ($food->animals as $animal)
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $animal->name }} eats -> {{ $food->name }}</p>
        @endforeach
    </span>
@endif
