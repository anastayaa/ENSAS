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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('departement', 'DepartementController');
Route::resource('prof', 'ProfController');
Route::resource('responsable', 'ResponsableController');
Route::resource('coordinateur', 'CoordinateurController');
Route::resource('filiere', 'FiliereController');


Route::get('/site', 'SiteController@index');
Route::get('/site/departs', 'SiteController@departs');
Route::get('/site/filieres', 'SiteController@filieres');
Route::get('/site/cycleprepa', 'SiteController@cycleprepa');
Route::get('/site/formations', 'SiteController@formations');
Route::get('/site/gallery', 'SiteController@gallery');

Route::get('/site/offre', 'SiteController@offre');

Route::get('/site/filieres/1', 'SiteController@ginfo');
Route::get('/site/filieres/3', 'SiteController@gindus');
Route::get('/site/filieres/2', 'SiteController@gtr');
Route::get('/site/filieres/4', 'SiteController@gpmc');

Route::get('/site/bde', 'SiteController@bde');
Route::get('/site/clubs', 'SiteController@clubs');
Route::get('/site/reglement', 'SiteController@reglement');

Route::get('/site/news', 'SiteController@news');
Route::get('/site/emploi', 'SiteController@emploi');
