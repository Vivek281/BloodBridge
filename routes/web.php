<?php

use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BloodRequestController;

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



//Frontend Routes
Route:: view('home','frontend.index')->name('frontend.index'); 


//Settings route
// Route::get('site-settings','SiteSettingController@index')->name('site.settings');
Route::get('site-settings',[SiteSettingController::class,'index'])->name('site.settings');
Route::post('site-settings/update',[SiteSettingController::class,'update'])->name('site.settings.update');

//Login Routes
Route:: get('login','LoginController@index')->name('login.form');
Route:: post('login-submit','LoginController@login')->name('login');
Route:: get('logout','LoginController@logout')->name('logout');

// Bacekend after login
Route::middleware('user_type:admin')->group(function () {
Route:: get('admin','LoginController@dashboard')->name('admin');
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


//Request form route
Route:: view('blood-request-form','controls.requests.form')->name('request.form');
//Request form in frontend and the Request table in backend
Route::resource('blood-request', 'BloodRequestController')->names([
    'index' => 'blood-request.index',
    'create' => 'blood-request.create',
    'store' => 'blood-request.store',
    'show' => 'blood-request.show',
    'edit' => 'blood-request.edit',
    'update' => 'blood-request.update',
    'destroy' => 'blood-request.destroy',
    ]);




// Signup Route
Route:: get('signup','RegisterController@signupForm')->name('signup.form');
Route:: post('signup-submit','RegisterController@register')->name('signup');



// Backend Routes 
// Route::view('dashboard','backend.dashboard')->name('backend.dashboard');