@extends('layouts.layout')

@section('content')
    <div class="flex flex-wrap justify-around mt-3">
        @include('pageParts.animal_card', ['animal' => $animal] )
    </div>
@endsection
