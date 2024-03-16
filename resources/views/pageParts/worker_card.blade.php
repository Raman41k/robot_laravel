@if(isset($workers))
    @foreach ($workers as $worker)
        <a href="{{ route('workers.worker', ['worker' => $worker]) }}" class="mb-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$worker->name}}</h5>

            @foreach ($worker->animals as $animal)
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $animal->name }} looks after by -> {{ $worker->name }}</p>
            @endforeach
        </a>
    @endforeach
@endif

@if(isset($worker))
    <span class="mb-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$worker->name}}</h5>

        @foreach ($worker->animals as $animal)
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $animal->name }} looks after by -> {{ $worker->name }}</p>
        @endforeach
    </span>
@endif

