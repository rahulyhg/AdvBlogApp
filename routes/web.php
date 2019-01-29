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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('posts/create',[
        'uses' => 'PostsController@create',
        'as' => 'posts.create'
    ]);


    Route::post('posts/store',[
        'uses' => 'PostsController@store',
        'as' => 'posts.store'
    ]);


    Route::get('categories/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'categories.create'
    ]);


    Route::post('categories/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'categories.store'
    ]);

    Route::get('categories/show',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories.show'
    ]);

});

