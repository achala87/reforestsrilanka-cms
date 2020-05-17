<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('main'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog_post', 'BlogPostController@index');
Route::post('/blog_post', 'BlogPostController@store');
Route::delete('/blog_post/{blog_post}', 'BlogPostController@destroy');
