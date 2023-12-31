<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tareas', function () {
    return (view('todos.index')
    );
})->name('todos');

Route::post('/tareas', [TodosController::class, 'index'])->name('todos');

Route::post('/tareas', [TodosController::class, 'store'])->name('todos');

Route::patch('/tareas', [TodosController::class, 'store'])->name('todos-edit');

Route::delete('/tareas', [TodosController::class, 'store'])->name('todos-destroy');
