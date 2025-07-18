<?php

use App\Http\Controllers\SiteSettingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend Routes
Route:: view('welcome','welcome');
Route:: view('master','frontend.layouts.master');
Route:: view('home','frontend.index')->name('frontend.index'); 


//Settings route
// Route::get('site-settings','SiteSettingController@index')->name('site.settings');
Route::get('site-settings',[SiteSettingController::class,'index'])->name('site.settings');
Route::post('site-settings/update',[SiteSettingController::class,'update'])->name('site.settings.update');

//Login Routes
Route:: view('login','frontend.login.form')->name('login.form');
Route:: post('login-submit','LoginController@login')->name('login');
Route:: get('logout','LoginController@logout')->name('logout');


Route:: get('admin','LoginController@dashboard')->name('admin')->middleware('user_type:admin');

// Backend Routes 
Route::view('dashboard','backend.dashboard')->name('backend.dashboard');