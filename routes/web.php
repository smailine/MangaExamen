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
    return view('formAjoutGenre');
});

/*Route::get('/','MangaController@getLesMangas');*/

Route::get('saisieGenre','Controller@ajoutConference');
Route::post('saisieGenre','ConferenceController@postAjoutConference');