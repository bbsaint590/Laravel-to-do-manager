<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TodosAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/index', [TodosAPIController::class, 'index']);
Route::post('/index/',[TodosAPIController::class, 'create']);
Route::delete('/index/',[TodosAPIController::class, 'delete']);
Route::put('/index/{id}',[TodosAPIController::class, 'update']);
