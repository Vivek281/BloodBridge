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




// Site setting routes
// Route::get('settings',[SiteSettings::class,'index'])->name('site.setting');



// SiteSetting Form
// Route::view('sitesetting','backend.settings.form')->name('sitesetting.form');

//Settings route
// Route::get('site-settings','SiteSettingController@index')->name('site.settings');
Route::get('site-settings',[SiteSettingController::class,'index'])->name('site.settings');
Route::post('site-settings/update',[SiteSettingController::class,'update'])->name('site.settings.update');



// Backend Routes 
Route::view('dashboard','backend.dashboard')->name('backend.dashboard');