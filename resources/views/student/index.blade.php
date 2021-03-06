@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection



@section('content')


@foreach($students as $student)


<div class="card flex column">
    <h1> <span>Name: </span>{{ $student->name }}</h1>
    <h2><span>Lastname: </span> {{ $student->lastname }}</h2>
    <h3><span>Nationality: </span>{{ $student->nationality }}</h3>
    <h4><span>Yob: </span>{{ $student->yob }}</h4>
    <a href="{{route('student.edit', $student->id)}}"><i class="fas fa-edit"></i></a>
    <a href="{{route('student.show', $student->id)}}"><i class="fas fa-eye"></i></a>
    <form action="{{route('student.destroy', $student->id)}}" method="post">
    @csrf
    @METHOD ('DELETE')
    <button class="btn btn-dark" type="submit">
    <i class="fas fa-trash" ></i></button>
    </form>
</div>


@endforeach

@endsection