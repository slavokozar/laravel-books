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

Route::get('/books', 'BookController@index');

Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/profile', function(){
//   return '<h1>Profile</h1>';
//})->middleware('auth');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile-show', 'ProfileController@show');