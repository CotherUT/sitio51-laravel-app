<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

//Redirige el trafico de 
Route::get('/', function () {
    echo "<a href='".route('ejemplo')."'>Contacto 1</a><br/>";
    echo "<a href='".route('ejemplo')."'>Contacto 2</a><br/>";
    echo "<a href='".route('ejemplo')."'>Contacto 3</a><br/>";
    echo "<a href='".route('ejemplo')."'>Contacto 4</a><br/>";
    echo "<a href='".route('ejemplo')."'>Contacto 5</a><br/>";  
});

Route::get('/contactanos', function () {
    return 'Bienvenido a contacto';
})->name('ejemplo'); //nombre de la ruta internamente

//hacer rutas y vistas para
//index
//materias
//alumnos
//carretas
//profesores

Route::get('/', function(){
    return view('Index');
})->name('index');

Route::get('/materias', 'App\Http\Controllers\MateriasController@index')->name('materias_index');
//Pasarle el id de la materia, desde el MateriaController
Route::get('/materias/{id}', 'App\Http\Controllers\MateriasController@show')->name('materias.show');

Route::get('/alumnos', function(){
    return view('Alumnos');
})->name('alumnos');

Route::get('/carreras', function(){
    return view('Carreras');
})->name('carreras');

Route::get('/profesores', function(){
    return view('Profesores');
})->name('profesores');

Route::get('/contactanos', 'App\Http\Controllers\ContactanosController')->name('contactanos');
Route::post('contactanos', 'App\Http\Controllers\MensajeController@store');