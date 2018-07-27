<?php

/*
|--------------------------------------------------------------------------
| MAIN
|--------------------------------------------------------------------------
*/

Route::get('/', 'Controller@home')->name('home');
Route::get('/club/presentation', 'Controller@presentation')->name('club.presentation');
Route::get('/club/disciplines', 'Controller@disciplines')->name('club.disciplines');
Route::get('/club/equipe', 'Controller@equipe')->name('club.equipe');
Route::get('/horaires-tarifs/horaires', 'Controller@horaires')->name('horaires-tarifs.horaires');
Route::get('/horaires-tarifs/tarifs', 'Controller@tarifs')->name('horaires-tarifs.tarifs');
Route::get('/competitions/calendrier', 'Controller@calendrier')->name('competitions.calendrier');
Route::get('/competitions/resultats', 'Controller@resultats')->name('competitions.resultats');
Route::get('/galerie', 'Controller@galerie')->name('galerie');


/*
|--------------------------------------------------------------------------
| INTRANET
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::prefix('intranet')->middleware('role:superadministrator|administrator|user')->group(function(){
    Route::get('/', 'IntraController@index')->name('intranet');
    Route::get('dashboard', 'IntraController@dashboard')->name('intranet.dashboard');
    Route::resource('/judokas', 'JudokaController');

    Route::resource('/actualites', 'ActualiteController');

    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController');
    Route::resource('/roles', 'RoleController');
});
