@extends('layout')

@section('content')

    <div class="title m-b-md">Todos</div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">
            </form>
        </div>
    </div>

    <hr>
    
    <div class="para m-b-md">
        <table>
            <tr>
                <td>Todos</td>
                <td>Action</td>
            </tr>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo->todo }}</td>
                    <td><a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@stop

