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
//Locale Switch routes
Route::get(
    'locale',
    function () {
        return \App::getLocale();
    }
);
Route::get(
    'locale/{locale}',
    function ($locale) {
        \Session::put('locale', $locale);

        return redirect()->back();
    }
);

/*//Route::get(
//    '/',
//    function ($locale = null) {
//        App::setLocale($locale);
//
//        return view('welcome');
//    }
)->name('home');*/
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
