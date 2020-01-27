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

// use Illuminate\Routing\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/services','ServiceController@index');
Route::post('/service/add','ServiceController@store');
Route::post('/service/update/{id}','ServiceController@update');

Route::get('/courses','CourseController@index');
Route::post('/create/course','CourseController@store');
Route::post('/course/update/{id}','CourseController@update');
Route::get('/course/delete/{id}','CourseController@destroy');

Route::view('/about','about');
