@extends('layouts.app')

@section('title',$task->title)


@section('content')
<div class="mb-4">
    <a class="font-medium text-gray-700 underline decoration-pink-500" href="{{route('tasks.index')}}">Go Back</a>
</div>
<p class="mb-4 text-slate-700">{{$task->description}}</p>

@if ($task->long_description)
    <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>    
@endif

<p class="mb-4 text-sm">{{ $task->created_at->diffForHumans()}}{{' Created | Updated '}}{{ $task->updated_at->diffForHumans() }}</p>
<p>
    @if ($task->completed)
      <span class="font-medium text-green-500 mb-4">Completed</span>
    @else
      <span class="font-medium text-red-500 mb-4">Uncomplete</span>
    @endif
  </p>
<div class="flex gap-2">
    <a class="btn" href="{{route('tasks.edit',['task'=>$task->id])}}">Edit</a>



    <form method="POST" action="{{route('tasks.toggle-complete',['task'=>$task])}}">
        @csrf
        @method('PUT')
        <button class="btn" type="submit"> Mark as {{$task->completed ? 'not completed' : 'completed'}}</button>
    </form>

    <form action="{{route('tasks.destroy',['task'=>$task])}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn"type="submit">Delete</button>
    </form>
</div>
@endsection
