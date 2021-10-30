<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', function() {
    $tasks = \App\Models\Task::$data;
    return view('main.app_index')->with('tasks', $tasks);
});

Route::post('/todo/add', function(Request $request) {
    $newTask = $request->get('input_task');
    return "Data yang ingin ditambah ". $newTask;
})->name('todo.add');

Route::get('/todo/change', function(Request $request){
    $taskId = $request->get('task_id');
    return "Data yang ingin diubah ". $taskId;
})->name('todo.change');
