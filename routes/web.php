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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//トップページ
Route::get('/', function () {return view('top.index');})->name('top');

//プロフィール
Route::get('/account', 'UserController@index')->name('profile');

//インフォメーション
Route::get('/information', function () {return view('information.index');})->name('information');

//ホーム
Route::get('/home', function () {return view('home.index');})->name('home');

//イベント
Route::get('/event', function () {return view('event.index');})->name('event');

//コンタクト
Route::get('/contact', function () {return view('contact.index');})->name('contact');

//About
Route::get('/about', function () {return view('about.index');})->name('about');
Route::get('/about/ferret', function () {return view('about.ferret');});

Route::get('/login/{provider}', 'Auth\SocialAccountController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');

