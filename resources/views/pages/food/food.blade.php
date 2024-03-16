@extends('layouts.layout')

@section('content')
    <div class="flex flex-wrap justify-around mt-3">
        @include('pageParts.food_card', ['food' => $food] )
    </div>
@endsection
