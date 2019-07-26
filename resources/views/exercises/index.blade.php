@extends('layouts.frontend')

@section('page.title', 'Excercises')

@section('page.content')
    <h1>Available Exercises</h1>
    <ul>
        @foreach($exercises as $exercise)
            <li>{{ $exercise->name }} <a href="{{ route('exercises.edit', ['$exercise'=>$exercise]) }}"><i class="fas fa-edit"></i></a></li>
        @endforeach
    </ul>
    <a href="{{ route('exercises.add') }}" class="btn btn-success">Add Exercise</a>
@endsection