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

Route::get('/', 'ExerciseController@index')->name('index');
Route::prefix('exercises')->group(function() {
    Route::get('/', 'ExerciseController@index')->name('exercises.index');
    Route::get('/add', 'ExerciseController@create')->name('exercises.add');
    Route::post('/store', 'ExerciseController@store')->name('exercises.store');
});