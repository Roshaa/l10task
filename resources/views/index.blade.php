@extends('layouts.app')


@section('title','The list of tasks')
    
@section('content')
<div class="mb-5">
    <a class="link" href="{{route('tasks.create')}}">Add task</a>

    @forelse($tasks as $task)
    <div>
    <a href="{{ route ('tasks.show',['task'=>$task->id])}}" @class(['line-through' => $task->completed])>
        
        {{$task->title}}</a>
    </div>
    @empty
    <div>There are no tasks</div>
    @endforelse

    @if ($tasks->count())
    <nav class="mt-5">
        {{$tasks->links()}}
    </nav>
    @endif
</div>


@endsection