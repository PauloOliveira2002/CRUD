<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', 'HomeController@index')->name('home');

// Players
Route::get('/players', 'PlayerController@index');
Route::get('/players/search', 'PlayerController@search')->name('search');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players', 'PlayerController@store');
Route::get('/players/{player}', 'PlayerController@show');
Route::get('/players/{player}/edit', 'PlayerController@edit');
Route::put('/players/{player}', 'PlayerController@update');
Route::delete('/players/{player}', 'PlayerController@destroy');

// Pets
Route::get('/pets', 'PetController@index');
Route::get('/pets/create', 'PetController@create');
Route::post('/pets', 'PetController@store');
Route::get('/pets/{pet}', 'PetController@show');
Route::get('/pets/{pet}/edit', 'PetController@edit');
Route::put('/pets/{pet}', 'PetController@update');
Route::delete('/pets/{pet}', 'PetController@destroy');
