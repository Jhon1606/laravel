<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
 


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

Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/cliente', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/cliente/{cliente}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::post('/cliente/update', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/cliente/delete/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.delete');
// Route::get('/clientes/{cliente}', [ClientesController::class, 'show'])->name('clientes.show');
