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

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->user_type == 'admin') {
            return redirect("/admin");
        } else if (Auth::user()->user_type == 'vendor') {
            return redirect("/vendor");
        } else if (Auth::user()->user_type == 'client') {
            return redirect("/client");
        } else if (Auth::user()->user_type == 'organisation') {
            return redirect("/organisation");
        }
    } else {


        return view('welcome');
    }
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('vendor', function () {
    return view('vendor.index');
});

Route::get('vendor/transaction/getvoucher/{voucherid}', ['as' => 'vendor.transaction.getvoucher', 'uses' => 'VoucherController@getVoucher']);


Route::get('vendor/adduser', ['as' => 'vendor.adduser', 'uses' => 'VendorController@addUser']);

Route::get('voucher/add', ['as' => 'voucher.add', 'uses' => 'VoucherController@add']);

Route::post('contact', ['as' => 'contact.post', 'uses' => 'ContactController@postContact']);
Route::get('contact/view', ['as' => 'contact.view', 'uses' => 'ContactController@viewContact']);

Route::get('contact/view/{id}', ['as' => 'contact.show', 'uses' => 'ContactController@show']);

Route::resource('admin', 'AdminController', ['names' => ['create' => 'admin.register'], 'parameters' => [
        'admin' => 'admin_user'
]]);

Route::resource('beneficiary', 'BeneficiaryController');
Route::resource('permission', 'PermissionController');

//Route::get('admin/create', 'AdminController@create');
//Route::post('admin/register', 'AdminController@post_register_admin');
//Route::get('auth/login', ['as' => 'login', 'uses'=> 'Auth\LoginController@getLogin']);
//Route::post('auth/login', 'Auth\LoginController@postLogin');
//Route::get('auth/logout', ['as' => 'logout', 'uses'=> 'Auth\LoginController@getLogout']);
Route::resource('profile', 'ProfileController');
Route::post('profile', ['as' =>'profile.store', 'uses'=>'ProfileController@store']);
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('profile/name/{userid}', ['as' =>'profile.edit.name', 'uses'=>'UserController@editName']);
Route::post('profile/photo/{profileid}', ['as' =>'profile.edit.photo', 'uses'=>'UserController@editPhoto']);