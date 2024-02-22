@extends('layouts.app')
@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')

    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        <?php //protecao contra ataques
        ?>
        @csrf
        @isset($task)
            @method('PUT')
        @endisset



        <label for="title">Title</label>
        <input type="text" name="title" id="title"
            class="border @error('title') border-red-500 @enderror ">{{ $task->title ?? old('title') }}</input>
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror
        <br>

        <label for="description">description</label>
        <textarea name="description" id="description" class="border @error('description') border-red-500 @enderror">{{ $task->description ?? old('description') }}</textarea>
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror
        <br>

        <label for="long_description">long_description</label>
        <textarea name="long_description" id="long_description" rows="10"
            class="border @error('description') border-red-500 @enderror">{{ $task->long_description ?? old('long_description') }}</textarea>
        @error('long_description')
            <p class="error">{{ $message }}</p>
        @enderror
        <br>
        <div class="flex gap-3">
            <button type="submit" class="btn">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset

            </button>
            <button class="btn"><a href="{{ route('tasks.index') }}">Cancel</a></button>
        </div>

    </form>
@endsection
