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
    return "Route untuk menambah task baru";
})->name('todo.add');
