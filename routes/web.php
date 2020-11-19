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

Route::resource('adminMenu', 'menuAdminController');

Route::get('/import-form','EstudianteController@importForm');
Route::resource('menuAdmin', 'menuAdmin');

Route::get('/get-all-estudiante','EstudianteController@getAllEstudiante');

Route::put('/import', 'EstudianteController@import')->name('import');