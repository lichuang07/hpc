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
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::get('faq', 'HomeController@faq');
Route::get('gallery', 'HomeController@gallery');
Route::get('team', 'HomeController@team');
Route::get('testimonial', 'HomeController@testimonial');
Route::post('joinus', 'HomeController@join');
Route::group(['prefix' => 'admins'], function () {
    Route::get('/', 'AdminController@index');
});
