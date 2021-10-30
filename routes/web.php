<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
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
    // dd($tasks);
    return view('index')->with('tasks', $tasks);
})->name('todo.index');

Route::post('/todo/add', function(\Illuminate\Http\Request $request) {
    return "Task baru adalah " . $request->input_task;
})->name('todo.add');

Route::get('/todo/change/{id}', function(\Illuminate\Http\Request $request, $id) {

    return "Id task yang di ubah adalah " . $id;
})->name('todo.change');
