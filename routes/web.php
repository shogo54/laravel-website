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

Route::get('/', 'HomeController@welcome');

Route::get('/about', 'HomeController@about');
Route::get('/how-to-use', 'HomeController@howToUse');
Route::get('/contact', 'HomeController@contact');

Route::get('/basics/primitive-and-reference', 'BasicsController@primitiveAndReference');

Route::get('/oop', 'OOPController@index');
Route::get('/oop/class', 'OOPController@classAndInstance');


Route::get('/data-structure/array', 'DataStructureController@aboutArray');
Route::get('/data-structure/list', 'DataStructureController@aboutList');