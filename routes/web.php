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

Route::get('/yes-or-no', 'SpinController@YesNo');
Auth::routes();

Route::get('/blog/name-of-blog', function () {
    return view('blog_post.post1');
});

Route::get('/blog/how-do-you-use-a-decision-wheel', function () {
    return view('blog_post.use_wheel');
});

Route::get('blog/How-do-you-use-a-name-wheel', function () {
    return view('blog_post.use_a_name_wheel');
});

Route::get('/blog/how-to-work-a-wheel-spinner', function () {
    return view('blog_post.work_wheel');
});

Route::get('/blog/how-do-you-decide-on-a-wheel', function () {
    return view('blog_post.decide_wheel');
});

Route::get('/blog/how-does-a-spinning-wheel-game-work', function () {
    return view('blog_post.spin_wheel_game_work');
});


Route::get('/blog/how-does-work-spin-the-wheel-game-online', function () {
    return view('blog_post.spin_wheel_game_online');
});

Route::get('/blog/how-do-you-use-a-name-picker-wheel', function () {
    return view('blog_post.spin_wheel_pick_name');
});


Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});
Route::get('/terms-and-conditions', function () {
    return view('terms');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/blog', 'BlogController');
Route::resource('/post', 'PostController');
Route::get('/{names?}', 'SpinController@index');