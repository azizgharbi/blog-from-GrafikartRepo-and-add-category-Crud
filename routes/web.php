<?php

$slugPattern = '[a-z0-9\-]+';

// We want to use specific routes (not the full authentication
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});
// Auth::routes();

Route::get('/', 'PostController@index')->name('home');
Route::get('/{slug}', 'PostController@show')->name('posts.show')->where('slug', $slugPattern);
Route::get('/category/{slug}', 'PostController@category')->name('posts.category')->where('slug', $slugPattern);
Route::get('/user/{id}', 'PostController@user')->name('posts.user')->where('id', '[0-9]+');

Route::resource('comments', 'CommentController', ['only' => ['store']]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController');
    Route::resource('categories', 'CategoryController');
});
