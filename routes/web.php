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
//List of routes for Site
Route::get('/', 'FrontController@index')->name('index');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('/contact', 'FrontController@storeContact')->name('contact.store');
//end route Site



Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function () {
    //List of routes for Menu module
    Route::resource('/category', 'CategoryController');
    Route::get('/menu', 'MenuController@index')->name('menu.index');

    Route::get('/menu/create', 'MenuController@create')->name('menu.create');

    Route::post('/menu', 'MenuController@store')->name('menu.store');

    Route::get('/menu/{id}/edit', 'MenuController@edit')->name('menu.edit');

    Route::put('/menu/{id}', 'MenuController@update')->name('menu.update');

    Route::delete('/menu/{id}', 'MenuController@delete')->name('menu.delete');
    // fin route Menu
});

Auth::routes();

//Posts Routes
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post', 'PostController@store')->name('post.store');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::put('/post/{id}', 'PostController@update')->name('post.update');
Route::delete('/post/{id}', 'PostController@delete')->name('post.delete');

Route::get('/blog', 'FrontController@blog')->name('front.blog');

//Posts Tags
Route::resource('tags', 'TagController');
