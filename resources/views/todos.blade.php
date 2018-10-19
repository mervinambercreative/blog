@extends('layout')

@section('content')

    <div class="title m-b-md">
        Todos
    </div>

    <div class="para m-b-md">
        @foreach ($todos as $todo)
            {{ $todo->todo }}
            <hr>
        @endforeach
    </div>

@stop

