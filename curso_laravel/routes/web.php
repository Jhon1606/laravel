<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', HomeController::class)->name('home'); //Llamamos a la clase HomeController que está ubicada en App\Http\Controllers la cual importamos desde arriba 

// Route::get('cursos', 'HomeController'); Esta se utiliza para versiones de laravel anteriores a la 8 (Utilizar namespace)
// Route::get('cursos', 'CursoController@index') Asi se llamaba cuando una clase contenia un metodo a llamar;


// Hay 2 maneras de utilizar rutas con controladores en común: 
// Primera manera
Route::controller(CursoController::class)->group(function (){
     Route::get('cursos', 'index')->name('cursos.index');
     Route::get('cursos/create', 'create')->name('cursos.create');
     Route::post('cursos', 'store')->name('cursos.store');
     Route::get('cursos/{curso}', 'show')->name('cursos.show');
     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
     Route::put('cursos/{curso}', 'update')->name('cursos.update'); // Metodo put para actualizar
     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy'); // Metodo delete para eliminar
});

Route::view('nosotros','nosotros')->name('nosotros');
// Route::get('contactanos', function(){
//      $correo = new ContactanosMailable;
//      Mail::to('barrosjhon936@gmail.com')->send($correo);
//      return "Mensaje enviado";
// });

Route::controller(ContactanosController::class)->group(function (){
     Route::get('contactanos', 'index')->name('contactanos.index');
     Route::post('contactanos', 'store')->name('contactanos.store');
});

// Route::resource('cursos', CursoController::class);

// Segunda manera
// Route::get('cursos', [CursoController::class, 'index']); // Cuando una clase contiene varios metodos, se encierra en un array y se llama el metodo a invocar
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);