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

/* learning pages */
Route::get('/', 'HomeController@welcome');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/basics/primitive-and-reference', 'BasicsController@primitiveAndReference');

Route::get('/oop', 'OOPController@index');
Route::get('/oop/class', 'OOPController@classAndInstance');


Route::get('/data-structure/array', 'DataStructureController@aboutArray');
Route::get('/data-structure/list', 'DataStructureController@aboutList');


/* coding pages */
Route::get("/coding/about", "HomeController@aboutCoding");
Route::get("/coding/basics", "HomeController@basics");

Route::get("/coding/data-structure/array", "Coding\DataStructureController@codingArray");

Route::get("/coding/algorithm/bfs", "Coding\AlgorithmController@codingBfs");
Route::get("/coding/algorithm/dfs", "Coding\AlgorithmController@codingDfs");