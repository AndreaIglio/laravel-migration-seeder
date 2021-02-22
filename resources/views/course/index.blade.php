@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection



@section('content')


@foreach($courses as $course)


<div class="card flex column">
    <h1> <span>Name: </span>{{ $course->name }}</h1>
    <h2><span>Description: </span> {{ $course->description }}</h2>
    <h3><span>Hours: </span>{{ $course->hours }}</h3>

</div>


@endforeach

@endsection