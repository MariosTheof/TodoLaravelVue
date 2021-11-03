<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('todo', \App\Http\Controllers\TodoController::class);
Route::put('/todoEdit/{id}', [\App\Http\Controllers\TodoController::class, 'updateTodo']);
