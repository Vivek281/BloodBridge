<?php

use Illuminate\Support\Facades\Route;

// Homepage Route
Route::get('/', function () {
    return view('frontend.index');
});

// Frontend Routes
Route::view('home', 'frontend.index')->name('frontend.index');

// Site Settings Routes
Route::get('site-settings', 'SiteSettingController@index')->name('site.settings');
Route::post('site-settings/update', 'SiteSettingController@update')->name('site.settings.update');

// Login Routes
Route::get('login', 'LoginController@index')->name('login.form');
Route::post('login-submit', 'LoginController@login')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');

// Signup Routes
Route::get('signup', 'RegisterController@signupForm')->name('signup.form');
Route::post('signup-submit', 'RegisterController@register')->name('signup');

// Protected Routes for Admin
Route::middleware('user_type:admin')->group(function () {

    Route::get('admin', 'LoginController@dashboard')->name('admin');
    Route::get('dashboard', 'LoginController@dashboard')->name('dashboard');

    Route::resource('users', 'UserController')->names([
        'index' => 'users.index',
        'create' => 'users.create',
        'store' => 'users.store',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'users.destroy',
    ]);
});
