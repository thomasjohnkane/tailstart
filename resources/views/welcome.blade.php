@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-8">
        <div data-controller="hello">
            <input class="field mb-2" data-target="hello.name" type="text">

            <button class="btn btn-blue" data-action="click->hello#greet">Greet</button>

            <span data-target="hello.output"></span>
        </div>
        <!-- Example to load external content -->
        <!-- <div data-controller="search" data-search-url="/instructors"></div> -->
    </div>
@endsection