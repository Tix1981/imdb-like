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

Route::get('/', 'MoviesController@index');

Route::get('/movies/create', 'MoviesController@create');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/movies/{genre}', 'MoviesController@genre');

Route::post('/movies', 'MoviesController@store');

Route::post('/movies/{id}/comments', 'CommentsController@store');
