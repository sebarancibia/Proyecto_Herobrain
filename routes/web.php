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

Route::get('showEditEstudiante', 'menuController@showEditEstudiante')->name('showEditEstudiante');

Route::post('editEstudianteRut', 'menuController@editEstudianteRut')->name('editEstudianteRut');

Route::get('/get-all-asignaturas','AsignaturaController@getAllAsignaturas');
// ruta para desplegar tabla asignaturas.
// ruta para importar archivo.
Route::put('/import', 'AsignaturaController@import')->name('import');

Route::resource('reportarSituacion','situacionController');

Route::post('reportarSituacion2', 'situacionController@reportarSituacion2')->name('reportarSituacion2');

Route::resource('reportarAtencion','atencionController');

Route::resource('fichaController','FichaController');

Route::post('buscarEstudianteRut', 'FichaController@buscarEstudianteRut')->name('buscarEstudianteRut');


Route::get('/situacion/{id}', 'FichaController@mostrarSituacion')->name('mostrarSituacion');

Route::get('/Atencion/{id}', 'FichaController@mostrarAtencion')->name('mostrarAtencion');

Route::post('crearSituacion', 'situacionController@crearSituacion')->name('crearSituacion');

Route::post('crearAtencion', 'atencionController@crearAtencion')->name('crearAtencion');


//rutas para ver fichas asignaturas, REP-003
Route::get('indexAsignatura','FichaController@indexAsignatura')->name('indexAsignatura');
Route::post('buscarAsignatura','FichaController@buscarAsignatura')->name('buscarAsignatura');
Route::get('/Atencion2/{id}','FichaController@mostrarAtencionAsignatura')->name('mostrarAtencionAsignatura');

//rutas ver fichas atenciones, REP-002
Route::get('indexAtencion','FichaController@indexAtencion')->name('indexAtencion');
Route::post('buscarProfesor','FichaController@buscarProfesor')->name('buscarProfesor');
Route::get('/Atencion3/{id}','FichaController@atencionProfesor')->name('atencionProfesor');