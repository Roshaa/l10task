<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/', function(){
    return redirect()->route('tasks.index');
});

Route::view('/tasks/create','create')
->name('tasks.create');



//routa para ir para a view para editar
Route::get('/tasks/{task}/edit', function (task $task) {
    return view('edit',['task'=>$task]);
})->name('tasks.edit');

Route::get('/tasks', function (){
    //retorna uma view da base de dados inteira
    return view('index', ['tasks' => Task::latest()->paginate(10)]);

    //vai mostrar tudo porque foram criadas ao mesmo tempo
    //return view('index', ['tasks' => \App\Models\Task::latest()->get()]);

    //contém um where na query
    //return view('index', ['tasks' => Task::latest()->where('completed',0)->get()]);

})->name('tasks.index');


Route::get('/tasks/{task}', function (task $task) {
    //retorna uma view com o valor do id no link, o findorfail evita erros quando mexem no id no link
    return view ('show', ['task'=> $task]);
})->name('tasks.show');


//Rota que iria buscar a task da class quando clicado no link
/*Route::get('/{id}', function ($id) use($tasks) {
    $task = collect($tasks)->firstWhere('id',$id);

    if(!$task){
        abort(Response::HTTP_NOT_FOUND);
    }
    return view ('show', ['task'=> $task]);
})->name('tasks.show');*/



//recebe o post, valida os dados e insere na tabela
Route::post('/tasks',function(TaskRequest $request){

    //task.php taskrequest.php
    
    /*$data=$request->validated();
    /*$data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required'
    ]);*/

    /*$task = new Task;
    $task->title=$data['title'];
    $task->description=$data['description'];
    $task->long_description=$data['long_description'];

    $task->save();*/
    $task= task::create($request->validated());

    return redirect()->route('tasks.show',['task'=>$task->id])
    ->with('success','Task created sucessfully!');

})->name('tasks.store');

//edita a task
Route::put('/tasks/{task}',function(task $task, TaskRequest $request){
    
    //$data=$request->validated();
    /* $data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required'
    ]);*/

    /*$task->title=$data['title'];
    $task->description=$data['description'];
    $task->long_description=$data['long_description'];

    $task->save();*/
    $task->update($request->validated());

    return redirect()->route('tasks.show',['task'=> $task->id])
    ->with('success','Task updated sucessfully!');

})->name('tasks.update');

//apaga o registo
Route::delete('/tasks/{task}',function(Task $task){
    $task->delete();
    
    return redirect()->route('tasks.index')
    ->with('success','Task deleted sucessfully');
})->name('tasks.destroy');


Route::put('tasks/{task}/toggle-complete',function(Task $task){

    $task->toggleComplete();

    return redirect()->back()->with('success','Task updated sucessfully');

})->name('tasks.toggle-complete');




/*
route::get('/xxx', function () {
    return 'xxx page';
});

Route::get('passarvalue/{name}', function ($name) {
    return 'hello' . $name;
});
*/