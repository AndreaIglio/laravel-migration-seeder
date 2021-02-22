@extends('layout.app')

@section('navbar')

@include('layout.partials.navbar')

@endsection



@section('content')

<form class="flex column" action="{{ route('student.update', $student->id) }}" method="post">
    @METHOD ('PATCH')
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" value="{{ $student->name }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <label for="">Lastname</label>
    <input type="text" name="lastname" value="{{ $student->lastname }}">
    @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <label for="">Date of birth</label>
    <input type="date" name="yob" value="{{ $student->yob }}">
    @error('yob')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    

    <button class="btn btn-dark">Edit</button>

</form>

@endsection