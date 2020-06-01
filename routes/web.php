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

Route::get('/yes-no', 'SpinController@YesNo');
Auth::routes();

Route::get('/blog/name-of-blog', function () {
    return view('blog_post.post1');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/blog', 'BlogController');
Route::resource('/post', 'PostController');
Route::get('/{names?}', 'SpinController@index');