<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServicesController;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients', [ClientsController::class,'index'])->name('clients.index');
Route::post('/clients', [ClientsController::class,'store'])->name('clients.store');
Route::get('/clients/{client}', [ClientsController::class,'show'])->name('clients.show');
Route::put('/clients/{client}', [ClientsController::class,'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientsController::class,'destroy'])->name('clients.destroy');

Route::get('/services', [ServicesController::class,'index'])->name('services.index');
Route::post('/services', [ServicesController::class,'store'])->name('services.store');
Route::get('/services/{service}', [ServicesController::class,'show'])->name('services.show');
Route::put('/services/{service}', [ServicesController::class,'update'])->name('services.update');
Route::delete('/services/{service}', [ServicesController::class,'destroy'])->name('services.destroy');

Route::post('clients/service',[ClientsController::class,'attach'])->name('clients.attach');
Route::post('clients/service/detach',[ClientsController::class,'detach']);

Route::post('services/clients',[ServicesController::class,'clients'])->name('services.clients');
