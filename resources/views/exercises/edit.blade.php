@extends('layouts.frontend')

@section('page.title', 'Exercises - Create')

@section('page.content')
    <h1>Add Exercise</h1>
    <form action="{{ route('exercises.store') }}" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exerciseName" value="{{ old('name',$exercise->name) }}" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
            @error('name')
            <div class="form-text text-danger">{{ $message }}</div>
            @else
            <small id="nameHelp" class="form-text text-muted">Enter the name of this exercise</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Add Exercise</button>
        @csrf
    </form>
@endsection