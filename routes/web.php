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



// Route::get('/', 'PostController@index')->middleware('auth');
// Route::get('/posts/create/','PostController@create');
// Route::get('/posts/{post}/edit', 'PostController@edit');
// Route::put('/posts/{post}','PostController@update');
// Route::delete('/posts/{post}', 'PostController@destroy');
// Route::get('/posts/{post}', 'PostController@show');
// Route::post('/posts', 'PostController@store');
// Route::get('/categories/{category}', 'CategoryController@index');


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    // Route::get('/','PostController@index');
    // Route::post('/posts', 'PostController@store');
    // Route::get('/stores/create', 'PostController@create');
    // // Route::get('/posts/{post}', 'PostController@show');
    // Route::post('/posts/{post}', 'Postcontroller@update');
    // Route::delete('/posts/{post}', 'PostController@delete');
    // Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::get('/','StoreController@index');
    Route::get('/stores/{store}', 'StoreController@show');
    Route::get('/stores/{store}/posts/create', 'PostController@create');
    Route::get('/stores/{store}/posts', 'PostController@index');
    Route::post('/stores/{store}/posts', 'PostController@store');
});
