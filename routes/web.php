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

Route::get('/admin', 'Admin\AdminController@allPosts');
Route::get('/admin/blog/list', 'Admin\AdminController@allBlogs');
Route::get('/admin/blog/new', 'Admin\AdminController@newBlog');

Route::get('/admin/project/new', 'Admin\AdminController@newProject');
Route::get('/admin/project/list', 'Admin\AdminController@allProjects');