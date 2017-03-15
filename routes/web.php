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


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/student-welcome', 'GradeController@index');
Route::get('/student-add', 'GradeController@create');
Route::get('/student-grade', 'GradeController@show');
Route::get('/student-Edit', 'GradeController@edit');

Route::resource('/grade','GradeController');

Route::get('/student/delete/{id}', 'GradeController@destroy');