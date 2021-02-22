@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection



@section('content')


    @foreach($classrooms as $class)

    <div class="card flex column">
        <h1> <span>Name: </span>{{ $class->name }}</h1>
        <h2><span>Capacity: </span> {{ $class->capacity }}</h2>
    </div>


    @endforeach

@endsection