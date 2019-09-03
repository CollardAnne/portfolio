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

// Route::get('/', function () {
//     return view('welcome');
// });



// Routes par défaut
//
Route::get('/', 'ProjetsController@index')->name('homepage');

// Routes des projets
//
// Route::get('projets/{id}', 'ProjetsController@show')->name('projets');


// Routes : Voyager
//
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
