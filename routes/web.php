<?php
use App\Http\Controllers\PostsController;

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



Auth::routes();

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create')->name('post.create');
Route::post('/p', 'PostsController@store')->name('post.store');
Route::get('/p/{post}', 'PostsController@show');

Route::get('/home', 'HomeController@index');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('post.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('post.update');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
