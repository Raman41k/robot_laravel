@extends('layouts.layout')

@section('content')
    <div class="flex flex-wrap justify-around mt-3">
        @include('pageParts.worker_card', ['worker' => $worker] )
    </div>
@endsection
