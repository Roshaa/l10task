@extends('layouts.app')


@section('title','The list of tasks')
    
@section('content')
<div>
    <a href="{{route('tasks.create')}}">Add task</a>
</div>
    

<h1>Hello im a blade template</h1>

<div>
    @if(count($tasks))
    @foreach ($tasks as $task)
    <div>{{$task->title}}</div>
    @endforeach
    @else
    <div>There are no tasks</div>
    @endif
</div>
    <br>
<div>
    @forelse($tasks as $task)
    <div>
    <a href="{{ route ('tasks.show',['task'=>$task->id])}}">{{$task->title}}</a>
    </div>
    @empty
    <div>There are no tasks</div>
    @endforelse

    @if ($tasks->count())
    <nav>
        {{$tasks->links()}}
    </nav>
    @endif
</div>
@endsection