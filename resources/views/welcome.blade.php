@extends('layouts.app')
@section('content')
    <div data-controller="search">
        <input data-target="search.name" type="text">
        <button data-action="click->search#greet">Greet</button>
    </div>
@endsection