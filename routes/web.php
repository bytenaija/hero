<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',  function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact', ['as' => 'contact.post', 'uses'=> 'ContactController@postContact']);
Route::get('contact/view', ['as' => 'contact.view', 'uses'=> 'ContactController@viewContact']);

Route::get('contact/view/{id}', ['as' => 'contact.show', 'uses'=> 'ContactController@show']);

Route::resource('admin', 'AdminController', ['names' => ['create' => 'admin.register'], 'parameters' => [
    'admin' => 'admin_user'
]]);

//Route::get('admin/create', 'AdminController@create');

//Route::post('admin/register', 'AdminController@post_register_admin');

Route::get('auth/login', ['as' => 'login', 'uses'=> 'Auth\LoginController@getLogin']);
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses'=> 'Auth\LoginController@getLogout']);
