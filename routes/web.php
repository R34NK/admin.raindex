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

// Route::get('/', function () {
//    return view('welcome');
// });


Route::group(['middleware' => 'admin'], function() {
   // Dashboard
   Route::get('/', 'AdminController@dashboard')->name('dashboard');

   // About Us
   Route::get('/about-us', 'Profile\AboutUsController@index')->name('aboutUs');
   Route::put('/about-us/update/{id}', 'Profile\AboutUsController@updateAbout')->name('aboutUs.update');
   Route::put('/about-us/update/vission/{id}', 'Profile\AboutUsController@updateVission')->name('vission.update');
   Route::put('/about-us/update/mission/{id}', 'Profile\AboutUsController@updateMission')->name('mission.update');

   // Portfolio
   Route::get('/portfolio', 'Profile\PortfolioController@index')->name('portfolio');
   Route::post('/portfolio/store', 'Profile\PortfolioController@store')->name('portfolio.store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
