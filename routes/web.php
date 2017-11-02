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
Route::get('/eleve/','StudentsController@index')->name('student.index');
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


//Route section école

Route::get('/ecole','SchoolsController@index')->name('ecole.index');
Route::get('/ecole/nouveau','SchoolsController@create')->name('ecole.create');
Route::post('ecole','SchoolsController@store')->name('ecole.store');
Route::get('ecole/{school}/modifier','SchoolsController@edit')->name("ecole.edit");
Route::put('ecole/{school}','SchoolsController@update')->name("ecole.update");
Route::get('ecole/{school}','SchoolsController@show')->name("ecole.show");
Route::delete('ecole/{school}','SchoolsController@destroy')->name("ecole.destroy");


//Route section schoolboard

//Route section école

Route::get('/cs','SchoolboardsController@index')->name('cs.index');
Route::get('/cs/nouveau','SchoolboardsController@create')->name('cs.create');
Route::post('cs','SchoolboardsController@store')->name('cs.store');
Route::get('cs/{schoolboard}/modifier','SchoolboardsController@edit')->name("cs.edit");
Route::put('cs/{schoolboard}','SchoolboardsController@update')->name("cs.update");
Route::get('cs/{schoolboard}','SchoolboardsController@show')->name("cs.show");


//route section des devoirs

Route::get('/logout','Auth\LoginController@logout');