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
    Route::get('new_partner', 'AdminController@newPartner');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('register', 'AdminController@register'); //社员注册
        Route::get('dashboard', 'AdminController@dashboard'); //个人信息管理
        Route::post('new_cluber', 'AdminController@newCluber'); //社员注册提交
    });
    Route::group(['prefix' => 'club'], function () {
        Route::get('info', 'AdminController@clubInfo');
        Route::get('manage', 'AdminController@clubManage');
        Route::get('register_confirm/{uid}', 'AdminController@registerConfirm');
    });
    Route::group(['prefix' => 'mail'], function () {
        Route::get('mailbox', 'AdminController@mailbox'); //收件箱
        Route::get('compose', 'AdminController@compose'); //写邮件
    });
    Route::group(['prefix' => 'calendar'], function () {
        Route::get('show', 'AdminController@calendarShow');
    });
    Route::group(['prefix' => 'manage'], function () {
        Route::get('set_admin/{id}', 'AdminController@setAdmin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
