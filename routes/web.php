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
    return view('layout.default');
});

Route::get('/abonnes/list','AbonneController@list')->name('abonnes.list');
Route::resource('users','UserController');
//::resource('gestionnaires','GestionnaireController');
Route::resource('abonnes','AbonneController');
Route::resource('evalutions','EvalutionController');
Route::resource('moniteurs','MoniteurController');
Route::resource('activites','ActiviteController');
Route::resource('seances','SeanceController');
Route::resource('validations','AbonnementController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
