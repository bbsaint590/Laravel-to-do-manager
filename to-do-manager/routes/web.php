<?php

use Illuminate\Support\Facades\Route;
USE \App\Http\Controllers\TodoController;

Route::get('/index/', [TodoController::class, 'allTodos']);
Route::get('/index/', [TodoController::class, 'completedTasks']);
