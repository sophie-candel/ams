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

Route::get('/club/presentation', function () {
    return view('app.presentation');
})->name('club.presentation');

Route::get('/club/equipe', function () {
    return view('app.equipe');
})->name('club.equipe');

Route::get('/horaires-tarifs/horaires', function () {
    return view('app.horaires');
})->name('horaires-tarifs.horaires');

Route::get('/horaires-tarifs/tarifs', function () {
    return view('app.tarifs');
})->name('horaires-tarifs.tarifs');

Route::get('/competitions/calendrier', function () {
    return view('app.calendrier');
})->name('competitions.calendrier');

Route::get('/competitions/resultats', function () {
    return view('app.resultats');
})->name('competitions.resultats');

Route::get('/galerie', function () {
    return view('app.galerie');
})->name('galerie');

Auth::routes();

Route::prefix('intranet')->middleware('role:superadministrator|administrator|user')->group(function(){
    Route::get('/', 'IntraController@index')->name('intranet');
    Route::get('dashboard', 'IntraController@dashboard')->name('intranet.dashboard');
    Route::resource('/users', 'UserCOntroller');
});

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/intra ', 'HomeController@index')->name('intra');