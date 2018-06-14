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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::prefix('intranet')->middleware('role:superadministrator|administrator|user')->group(function(){
    Route::get('/', 'IntraController@index')->name('intranet');
    Route::get('dashboard', 'IntraController@dashboard')->name('intranet.dashboard');
    Route::resource('/users', 'UserCOntroller');
});

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/intra ', 'HomeController@index')->name('intra');