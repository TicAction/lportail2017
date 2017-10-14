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



Auth::routes();
//
Route::get('/', 'HomesController@index')->name('home');

//route sections des élèves
Route::get('/eleve','StudentsController@index')->name('student.index');
Route::get('/eleve/nouveau','StudentsController@create')->name('student.create');
Route::post('eleve','StudentsController@store')->name('student.store');
Route::get('eleve/{student}/modifier','StudentsController@edit')->name("student.edit");
Route::put('eleve/{student}','StudentsController@update')->name("student.update");
Route::get('eleve/{student}','StudentsController@show')->name("student.show");
Route::delete('eleve/{student}','StudentsController@destroy')->name("student.destroy");

// route section des groups
Route::get('/groupe','GroupsController@index')->name('group.index');
Route::get('/groupe/nouveau','GroupsController@create')->name('group.create');
Route::post('groupe','GroupsController@store')->name('group.store');
Route::get('groupe/{group}/modifier','GroupsController@edit')->name("group.edit");
Route::put('groupe/{group}','GroupsController@update')->name("group.update");
Route::get('groupe/{group}','GroupsController@show')->name("group.show");
Route::delete('groupe/{group}','GroupsController@destroy')->name("group.destroy");

// Route section du profil étudiant

Route::get('/profil','ProfilsController@index')->name('profil.index');
Route::get('/profil/nouveau','ProfilsController@create')->name('profil.create');
Route::post('profil','ProfilsController@store')->name('profil.store');
Route::get('profil/{profil}/modifier','ProfilsController@edit')->name("profil.edit");
Route::put('profil/{profil}','ProfilsController@update')->name("profil.update");
Route::get('profil/{profil}','ProfilsController@show')->name("profil.show");
Route::delete('profil/{profil}','ProfilsController@destroy')->name("profil.destroy");

//Route section observation comportement

Route::get('/observation','BehaviorsController@index')->name('observation.index');
Route::get('/observation/nouveau','BehaviorsController@create')->name('observation.create');
Route::post('observation','BehaviorsController@store')->name('observation.store');
Route::get('observation/{behavior}/modifier','BehaviorsController@edit')->name("observation.edit");
Route::put('observation/{behavior}','BehaviorsController@update')->name("observation.update");
Route::get('observation/{behavior}','BehaviorsController@show')->name("observation.show");
Route::delete('observation/{behavior}','BehaviorsController@destroy')->name("observation.destroy");


//route section des devoirs

Route::get('/logout','Auth\LoginController@logout');