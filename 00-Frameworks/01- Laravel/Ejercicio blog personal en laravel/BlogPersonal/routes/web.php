<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorNavegacion;
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

Route::controller(controladorNavegacion::class)->group(function(){


Route::get('','inicio')->name('inicio');

Route::get('Formacion','formacion')->name('formacion');

Route::get('Destrezas','destrezas')->name('destrezas');

Route::get('Proyectos','proyectos')->name('proyectos');

Route::get('SobreMi','sobremi')->name('sobremi');

Route::get('Contacto','contacto')->name('contacto');

Route::post('Mensaje','mensaje')->name('mensaje');

});
