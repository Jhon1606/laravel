<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
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

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

// Otra forma simplificada de hacer las rutas para un crud utilizando el comando:
// php artisan make:controller NameController --resource (En el controlador crea todas las funciones de un crud) 
// para crear el controlador y llamar el metodo resource aqui en las rutas. 
// Esto es lo mismo que está arriba con el NoteController pero con una sola linea de codigo
// utlizando el resource (simplificado)
Route::resource('/post', PostController::class);
