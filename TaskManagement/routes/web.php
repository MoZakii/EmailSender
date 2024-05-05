<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index']);

Route::get('/', [TasksController::class, 'index'])->name('index');
Route::get('/tasks/create', [TasksController::class, 'create'])->name('create');
Route::post('/tasks', [TasksController::class, 'store'])->name('store');
Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('edit');
Route::put('/tasks/{task}', [TasksController::class, 'update'])->name('update');
Route::delete('/tasks/{task}', [TasksController::class, 'destroy'])->name('destroy');