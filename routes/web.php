<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::group(['prefix' => 'home'], function() {
    Route::get('home', [ 
        'uses' => 'PostController@getHome',
        'as' => 'home.home'
    ]);
        
    Route::get('post/{id}', [
        'uses' => 'PostController@getPost',
        'as' => 'home.post'
    ]);

    Route::get('post/{id}/like', [
        'uses' => 'PostController@getLikePost',
        'as' => 'home.post.like'
    ]);
});

Route::get('about', function() {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);
    
    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'PostController@getAdminDelete',
        'as' => 'admin.delete'
    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});
Auth::routes();

Route::post('login', [
    'uses' => 'SigninController@signin',
    'as' => 'auth.signin'
]);
