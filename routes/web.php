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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'IndexController@dashboard');
Route::get('/adduser', 'IndexController@adduser');
Route::get('/viewuser', 'IndexController@viewuser');
Route::get('/viewinfo','IndexController@viewinfo');
Route::get('/informationfield','IndexController@informationfield');

Route::get('/resetuser','IndexController@resetuser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
