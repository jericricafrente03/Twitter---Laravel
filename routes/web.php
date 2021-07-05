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

Auth::routes();

Route::post('/follow/{user}', 'FollowController@store');

Route::get('/', 'PostController@index')->middleware('auth');

Route::post('/post', 'PostController@store')->middleware('auth');

Route::get('/post/create', 'PostController@create')->middleware('auth');

Route::get('/post/{post}', 'PostController@show');



Route::get('/profile/{user}', 'profileController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'profileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'profileController@update')->name('profile.update');
