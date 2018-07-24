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
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', function() {
    return view('resume');
});

Route::get('/courses', function() {
    return view('allcourse');
});


Route::get('/project/{id}', 'ProjectController@show');
Route::get('/portfolio', 'ProjectController@showAll');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/blog', 'BlogController@showAll');
Route::get('/blog/category/{id}', 'BlogController@showCategory');
Route::get('/blog/{id}/', 'BlogController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\AdminController@all');
Route::get('/admin/list/{post_type}', 'Admin\AdminController@all');
Route::get('/admin/new/{post_type}', 'Admin\AdminController@add');
Route::get('/admin/edit/{id}', 'Admin\AdminController@edit');

Route::post('/admin/edit/{id}', 'Admin\AdminController@save');

Route::any('/admin/image/upload', 'Admin\ImageController@put');
Route::any('/admin/image/list', 'Admin\ImageController@getList');