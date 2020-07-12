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
// Route::get('/', function () {
//     return view('pages/pageshow');
// });
Route::get('pages','pageController@pageshow');
Route::get('pages/{page}','pageController@pageone');
Route::post('pages/store','pageController@store');
Route::get('pages/{page}/delete','pageController@delete');
Route::get('pages/{page}/deleteall','pageController@deleteall');

Route::post('pages/{page}/notesstore','noteController@store');

Route::get('notes/{note}/edit','noteController@edit');
Route::post('notes/{note}/update','noteController@update');
Route::get('notes/{note}/delete','noteController@delete');


