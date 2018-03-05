@extends('layouts.app')
@section('content')
    <div data-controller="hello">
        <input data-target="hello.name" type="text">

        <button data-action="click->hello#greet">Greet</button>

        <span data-target="hello.output"></span>
    </div>
    <!-- Example to load external content -->
    <!-- <div data-controller="search" data-search-url="/instructors"></div> -->
@endsection