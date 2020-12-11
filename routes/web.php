<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('menuAdmin', 'menuAdminController');

// ruta para vista de importar archivo estudiantes.
Route::get('/import-form','EstudianteController@importForm');

// ruta para vista de importar archivo asignaturas.
Route::get('/import-form-asignaturas','AsignaturaController@importFormAsignatura');

// ruta para desplegar tabla estudiantes.
Route::get('/get-all-estudiante','EstudianteController@getAllEstudiante');

// ruta para importar archivo.
Route::put('/import2', 'EstudianteController@import2')->name('import2');

Route::resource('viewMenuPrincipal', 'menuController');
Route::get('/get-all-asignaturas','AsignaturaController@getAllAsignaturas');
// ruta para desplegar tabla asignaturas.
// ruta para importar archivo.
Route::put('/import', 'AsignaturaController@import')->name('import');

Route::resource('reportarSituacion','situacionController');

Route::resource('reportarAtencion','atencionController');
