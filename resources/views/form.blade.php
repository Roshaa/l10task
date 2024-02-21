@extends('layouts.app')
@section('title',isset($task)?'Edit Task' : 'Add Task')

@section('content')

@section('styles')
<style>
    .error-message{
        color: red;
    }
</style>
@endsection
{{$errors}}
    <form method="POST" action="{{isset($task) ? route('tasks.update',['task'=>$task->id]) : route('tasks.store')}}">
        <?php //protecao contra ataques ?>
        @csrf
        @isset($task)
            @method('PUT')            
        @endisset



            <label for="title">Title</label>
            <input type="text" name="title" id="title">{{$task->title ?? old('title')}}</input>
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
            <br>

            <label for="description">description</label>
            <textarea name="description" id="description">{{$task->description ?? old('description')}}</textarea>
            @error('description')
                <p class="error-message">{{$message}}</p>
            @enderror
            <br>

            <label for="long_description">long_description</label>
            <textarea name="long_description" id="long_description" rows="10">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
            <br>

            <button type="submit">
                @isset($task)
                Update Task
                @else
                Add Task
                @endisset
        
        </button>
    

    </form>
@endsection