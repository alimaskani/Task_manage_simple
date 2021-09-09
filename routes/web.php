<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

Route::get('/',[TodoController::class,'Index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'Create'])->name('todos.create');
Route::get('/todos/{todo}',[TodoController::class,'Show'])->name('todos.show');
Route::post('/todos',[TodoController::class,'Store'])->name('todos.store');
Route::get('/todos/{todo}/edit',[TodoController::class,'Edit'])->name('todos.edit');
Route::post('/todos/{todo}/update',[TodoController::class,'Update'])->name('todos.update');
Route::get('/todos/{todo}/delete',[TodoController::class,'Delete'])->name('todos.delete');
Route::get('/todos/{todo}/complete',[TodoController::class,'Complete'])->name('todos.complete');



