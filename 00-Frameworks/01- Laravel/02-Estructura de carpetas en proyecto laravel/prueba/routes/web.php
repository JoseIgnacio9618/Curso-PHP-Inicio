<?php

use App\Http\Controllers\emailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultipleController;

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


// Las rutas contienen un link y una vista a la que llevarnos cuando el usuario llegue a ese link

Route::get('/', HomeController::class);

//version estandar
/*
Route::get('users', [MultipleController::class,'index']);

Route::get('cursos', [MultipleController::class,'create']);

Route::get('mensaje/{curso}', [MultipleController::class,'show']);
*/



// VERSION SIMPLIFICADA
Route::controller(MultipleController::class)->group(function(){

    Route::get('', 'index')->name('index');

    Route::get('cursos', 'Cursos')->name("cursos");
    
    Route::get('crearCurso', 'create')->name("crearCurso");

    Route::get('mostrarCurso/{id}', 'mostrar')->name("mostrarCurso");

    Route::post('cursosañadir', 'añadirCurso')->name('cursos.añadir');

    Route::get('editarCurso/{id}', 'editar')->name("editarCurso");

    Route::put('actualizar/{id}', 'update')->name("actualizarCurso");

    Route::delete('eliminar/{id}', 'destroy')->name("eliminarCurso");

    
});



Route::controller(emailController::class)->group(function(){

    Route::get('contacto', 'contacto')->name('contacto');
});




