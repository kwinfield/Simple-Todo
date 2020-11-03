@extends('layouts.app')

@section('title')
Todos List
@endsection

@section('content')

<h1 class='text-center my-5'>Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class='list-group'>
                    @foreach($todos as $todo)
                        <li class='list-group-item'>
                            @if ($todo->completed)
                                <p style="text-decoration: line-through">{{ $todo->name }}</p>
                                <button class="btn btn-primary btn-sm float-right"><a href='/todos/{{ $todo->id }}'>View</a></button>
                            @else
                                <p>{{ $todo->name }}</p>
                                <button class="btn btn-danger btn-sm float-right ml-2"><a href='/todos/{{ $todo->id }}/completed'>Completed</a></button>
                                <button class="btn btn-primary btn-sm float-right"><a href='/todos/{{ $todo->id }}'>View</a></button>
                            @endif
                            
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection