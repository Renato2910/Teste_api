<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/task', [TaskController::class, 'index']); //rota principal
Route::post('/task', [TaskController::class, 'store']); //Banco de dados 
Route::get('/task/{id}', [TaskController::class, 'show']); //trazer informações banco de dados
Route::put('/task/{id}', [TaskController::class, 'update']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);

