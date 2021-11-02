<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/todo', function(\Illuminate\Http\Request $request) {
    $tasks = \App\Models\Task::$data;
    return view('index')->with('tasks', $tasks);
})->name('todo.index');

Route::post('/todo/add', function(\Illuminate\Http\Request $request) {
    return "Data Task Baru : ".$request->input('input_task');
})->name('todo.add');

Route::get('/todo/update', function(\Illuminate\Http\Request $request) {
    return "Data yang diubah memiliki ID : ".$request->input('task_id');
})->name('todo.update');